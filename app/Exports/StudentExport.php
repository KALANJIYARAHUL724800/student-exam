<?php

namespace App\Exports;

use App\Models\StudentOverallMarks;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StudentExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $examId;

    public function __construct($examId)
    {
        $this->examId = $examId;
    }
    public function collection()
    {
        $results = StudentOverallMarks::select('users.name', 'exam_masters.exam_type', DB::raw('sum(student_overall_marks.marks) as totalmarks'))
            ->join('users', 'student_overall_marks.user_id', '=', 'users.id')
            ->join('class_masters', 'users.class_id', '=', 'class_masters.id')
            ->join('subjects', 'student_overall_marks.subject_id', '=', 'subjects.id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->where('exam_masters.id', '=', $this->examId)
            ->groupBy('users.id', 'users.name', 'exam_masters.exam_type')
            ->orderBy('totalmarks', 'desc')
            ->limit(3)
            ->get();
        return $results;
    }
    public function headings(): array
    {
        return [
            'Student Name',
            'Exam Type',
            'Total Marks',
        ];
    }
}
