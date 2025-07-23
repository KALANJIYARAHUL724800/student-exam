<?php
namespace App\Services;
use App\Services;
use App\Models\ExamMaster;
use Illuminate\Http\Request;
use App\Models\StudentOverallMarks;
use App\Models\Subjects;
use Illuminate\Database\Eloquent\Builder;

class ExamService
{
    public function show_ExamType()
    {
        return ExamMaster::all();
    }
    public function getAllDatas(Request $request)
    {
        $subject_id = $request->subject_id;
        $class_id = $request->class_id;
        $exam_type = $request->exam_type;
        $sdate = $request->sdate;
        $edate = $request->edate;
        $data = StudentOverallMarks::select(
            'users.name',
            'exam_masters.exam_type',
            'subjects.subject_name',
            'student_overall_marks.marks'
        )
            ->join('subjects', 'subjects.id', '=', 'student_overall_marks.subject_id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->join('users', 'student_overall_marks.user_id', '=', 'users.id')
            ->join('class_masters', 'users.class_id', '=', 'class_masters.id')
            ->when(!empty($subject_id), function (Builder $query) use ($subject_id) {
                return $query->where('subjects.id', $subject_id);
            })
            ->when(!empty($class_id), function (Builder $query) use ($class_id) {
                return $query->where('class_masters.id', $class_id);
            })
            ->when(!empty($exam_type), function (Builder $query) use ($exam_type) {
                return $query->where('exam_masters.id', $exam_type);
            })
            ->whereBetween('student_overall_marks.created_at', [$sdate, $edate])
            ->get();
        return $data;
    }
    public function getExamSubjects(Request $request)
    {
        $subjects = Subjects::select(
            'subjects.id',
            'subject_name',
        )
            ->join('class_masters', 'subjects.class_id', '=', 'class_masters.id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->where('exam_masters.id', $request->exam_id)
            ->where('class_masters.id', $request->class_id)
            ->get();
        return $subjects;
    }
}