<?php
namespace App\Services;
use App\Services;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentOverallMarks;
class EmailService
{
    public function emailsent($data = null)
    {
        // dd($data->toArray(),Auth::user()->email);
        Mail::to(Auth::user()->email)->send(new WelcomeEmail($data));
    }
    public function complete_exam()
    {
        $results = StudentOverallMarks::select(
            'subjects.subject_name',
            'student_overall_marks.marks'
        )
        ->join('subjects','subjects.id','=','student_overall_marks.subject_id')
        ->join('users','student_overall_marks.user_id','=','users.id')
        ->where('users.id',Auth::user()->id)->get();
        return $results;
    }
}