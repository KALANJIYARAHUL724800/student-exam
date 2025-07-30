<?php
namespace App\Services;
use App\Services;
use App\Models\ExamMaster;
use Illuminate\Http\Request;
use App\Models\StudentOverallMarks;
use App\Models\Subjects;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
class ExamService
{
    public function show_ExamType()
    {
        return ExamMaster::select('id', 'exam_type')->where('active_flag', 1)->get();
    }
    public function getAllDatas(Request $request)
    {
        $SubjectId = $request->subject_id;
        $ClassId = $request->class_id;
        $ExamType = $request->exam_type;
        if (!empty($request->sdate)) {
            $StartDate = Carbon::parse($request->sdate)->startOfDay();
        }
        if (!empty($request->edate)) {
            $EndDate = Carbon::parse($request->edate)->endOfDay();
        }
        $Data = StudentOverallMarks::select(
            'users.name',
            'exam_masters.exam_type',
            'subjects.subject_name',
            'student_overall_marks.marks'
        )
            ->join('subjects', 'subjects.id', '=', 'student_overall_marks.subject_id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->join('users', 'student_overall_marks.user_id', '=', 'users.id')
            ->join('class_masters', 'users.class_id', '=', 'class_masters.id')
            ->when(!empty($SubjectId), function (Builder $query) use ($SubjectId) {
                return $query->where('subjects.id', $SubjectId);
            })
            ->when(!empty($ClassId), function (Builder $query) use ($ClassId) {
                return $query->where('class_masters.id', $ClassId);
            })
            ->when(!empty($ExamType), function (Builder $query) use ($ExamType) {
                return $query->where('exam_masters.id', $ExamType);
            })
            ->whereBetween('student_overall_marks.created_at', [$StartDate, $EndDate])
            ->get();
        return $Data;
    }
    public function getExamSubjects(Request $request)
    {
        $Subjects = Subjects::select(
            'subjects.id',
            'subject_name',
        )
            ->join('class_masters', 'subjects.class_id', '=', 'class_masters.id')
            ->join('exam_masters', 'subjects.exam_id', '=', 'exam_masters.id')
            ->where('exam_masters.id', $request->exam_id)
            ->where('class_masters.id', $request->class_id)
            ->get();
        return $Subjects;
    }
}