<?php

namespace App\Services;

use App\Models\StudentOverallMarks;
use App\Services;
use App\Models\Subjects;
use Illuminate\Support\Facades\Auth;
class SubjectsService{
    public function getSubjectsService($id)
    {
        $markedSubjects = StudentOverallMarks::where('user_id', Auth::user()->id)
        ->pluck('subject_id')
        ->toArray();
        $Subjects = Subjects::select(
            'subjects.id', 
            'subjects.subject_name'
        )
        ->join('class_masters', 'subjects.class_id', '=', 'class_masters.id')
        ->where('subjects.class_id', Auth::user()->class_id)
        ->where('subjects.exam_id', $id)
        ->whereNotIn('subjects.id', $markedSubjects)
        ->get();
        return $Subjects;
    }
   
}