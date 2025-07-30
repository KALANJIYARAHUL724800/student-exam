<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Models\StudentOverallMarks;
use Illuminate\Http\Request;
use App\Services\ResultService;
use Excel;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Support\Facades\Validator;
use Carbon;
class ResultController extends Controller
{

    protected $ResultServices;
    public function __construct(ResultService $resultService)
    {
        $this->ResultServices = $resultService;
    }
    public function getResults(Request $request)
    {
        //check if validator fails return validation message
        $validator = Validator::make($request->all(), ['exam_id' => 'required|integer']);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        $validated = $validator->validated();
        return $this->ResultServices->getResult($validated);
    }
    public function export(Request $request)
    {
        $validator = Validator::make($request->all(), ['exam_id' => 'required|integer']);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        $validated = $validator->validated();
        $current_time = Carbon\Carbon::now()->toDateTimeString();
        $fileName = $current_time . 'scores.xlsx';
        $file = Excel::store(new StudentExport($validated['exam_id']), $fileName, 'public');
        if (empty($file)) {
            return null;
        }
        return storage_path('app/public/' . $fileName);
    }
    public function test(Request $request)
    {
        $validator = Validator::make($request->all(), ['exam_id' => 'required|integer']);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        $validated = $validator->validated();
        $topRanks = DB::select("
    SELECT 
        name,
        exam_type,
        totalmarks,
        RANK() OVER (ORDER BY totalmarks DESC) AS `rank`
    FROM (
        SELECT 
            users.name,
            exam_masters.exam_type,
            SUM(student_overall_marks.marks) AS totalmarks
        FROM student_overall_marks
        INNER JOIN users ON student_overall_marks.user_id = users.id
        INNER JOIN subjects ON student_overall_marks.subject_id = subjects.id
        INNER JOIN exam_masters ON subjects.exam_id = exam_masters.id
        INNER JOIN class_masters ON subjects.class_id = class_masters.id
        WHERE exam_masters.id = ?
        GROUP BY users.id, users.name, exam_masters.exam_type
    ) AS sub
    ORDER BY totalmarks DESC
    LIMIT 3
", [$validated['exam_id']]);
        return response()->json($topRanks);
    }
}
