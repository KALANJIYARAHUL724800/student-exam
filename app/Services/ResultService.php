<?php
namespace App\Services;
use App\Http\Controllers\ResultController;
use App\Models\StudentOverallMarks;
use DB;
class ResultService
{
    public function getResult($examId)
    {
        $results = StudentOverallMarks::select(
            'users.id',
            'users.name',
            'exam_masters.exam_type',
            DB::raw('SUM(student_overall_marks.marks) as totalmarks')
        )
            ->join('users', 'student_overall_marks.user_id', '=', 'users.id')
            ->join('class_masters', 'users.class_id', '=', 'class_masters.id')
            ->join('subjects', 'student_overall_marks.subject_id', '=', 'subjects.id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->where('exam_masters.id', '=', $examId)
            ->groupBy('users.id', 'users.name', 'exam_masters.exam_type')
            ->orderBy('totalmarks', 'desc')
            ->get()->toArray();

        return $results;

    }
    public function GetPdf($data)
    {
        //rank
        $topRanks = DB::select("
    SELECT 
        id,
        name,
        exam_type,
        totalmarks,
        RANK() OVER (ORDER BY totalmarks DESC) AS `rank`
    FROM (
        SELECT 
            users.id,
            users.name,
            exam_masters.exam_type,
            subjects.subject_name,
            SUM(student_overall_marks.marks) AS totalmarks
        FROM student_overall_marks
        INNER JOIN users ON student_overall_marks.user_id = users.id
        INNER JOIN subjects ON student_overall_marks.subject_id = subjects.id
        INNER JOIN exam_masters ON subjects.exam_id = exam_masters.id
        INNER JOIN class_masters ON subjects.class_id = class_masters.id
        WHERE exam_masters.id = ?
        GROUP BY users.id, users.name, exam_masters.exam_type,subjects.id
    ) AS sub
    ORDER BY totalmarks DESC
    LIMIT 3
", [$data['exam_id']]);
        //subjects
        $res = StudentOverallMarks::select(
            'users.name',
            'exam_masters.exam_type',
            'subjects.subject_name',
            'student_overall_marks.marks'
        )
            ->join('users', 'student_overall_marks.user_id', '=', 'users.id')
            ->join('subjects', 'student_overall_marks.subject_id', '=', 'subjects.id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->join('class_masters', 'subjects.class_id', '=', 'class_masters.id')
            ->where('exam_masters.id', '=', $data['exam_id'])
            ->where('users.id', '=', $data['user_id'])
            ->groupBy(
                'users.id',
                'users.name',
                'exam_masters.exam_type',
                'subjects.id',
                'subjects.subject_name',
                'student_overall_marks.id',
                'student_overall_marks.marks'
            )
            ->get();

        $subjects = [];
        foreach ($res as $item) {
            $subjects[] = [
                'subject_name' => $item->subject_name,
                'marks' => $item->marks
            ];
        }

        foreach ($topRanks as $item) {
            if ($item->id == $data['user_id']) {
                $temp = [
                    'name' => $item->name,
                    'exam_type' => $item->exam_type,
                    'totalmarks' => $item->totalmarks,
                    'rank' => $item->rank,
                    'subjects' => $subjects
                ];

            }
        }
        return $temp;
    }
}