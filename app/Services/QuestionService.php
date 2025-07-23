<?php
 namespace App\Services;
 use App\Services;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\QuestionResults;
use App\Models\StudentOverallMarks;
class QuestionService{
    public function getQuestions(Request $request)
    {
    $exam_id = $request->subjects;
    $exam_type = $request->exam_type;
    $question = Questions::select(
            'questions.id', 
            'questions.question_text',
            'question_options.id as option_id',
            'question_options.options'
        )
        ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
        ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
        ->join('users', 'users.class_id', '=', 'subjects.class_id')
        ->join('question_options','question_options.question_id','=','questions.id')
        ->where('users.id', Auth::user()->id) 
        ->where('exam_masters.id', $exam_type) 
        ->where('subjects.id', $exam_id)
        ->get();
        return $question;
    }
    public function questionVerify(Request $request)
    {       
        $getQuestionAnswers = collect($request->all());
        $getQuestionAnswerArr = $getQuestionAnswers->toArray();
        $getQuestionIds = $getQuestionAnswers->keys()->toArray();
        $questionAnswers = Questions::with('questionOptions')
        ->whereIn('id', $getQuestionIds)->get();
        $getSubjectId = $questionAnswers->pluck('subject_id')->first();
        $totalMarks = 0;
        foreach($questionAnswers->toArray() as $question)
        {
            $getQuestionCorrectAnswer = collect($question['question_options'])
            ->where('is_correct_answer', true)->first();
            $questionResult = [
                'question_id' => $question['id'],
                'user_id' => Auth::user()->id,
                'question_option_id' => $getQuestionAnswerArr[$question['id']],
                'mark_availed' => $getQuestionAnswerArr[$question['id']] == $getQuestionCorrectAnswer['id'] ? $question['marks'] : 0
            ];
            $totalMarks = $totalMarks + $questionResult['mark_availed'];
            QuestionResults::create($questionResult);
        }
        StudentOverallMarks::create([
            "user_id"=> Auth::user()->id,
            "subject_id"=> $getSubjectId,
            "marks"=>$totalMarks,
            "email_sent_at"=>now()
        ]);
    }
}