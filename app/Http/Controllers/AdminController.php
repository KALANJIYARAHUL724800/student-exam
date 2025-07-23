<?php

namespace App\Http\Controllers;
use App\Models\ClassMaster;
use App\Models\Subjects;
use App\Models\StudentOverallMarks;
use App\Models\User;
use App\Services\ExamService;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    protected $exam_service;
    public function __construct(ExamService $exam_service)
    {
        $this->exam_service = $exam_service;
    }
    public function admin()
    {
        $exam_types = $this->exam_service->show_ExamType();
        return view('superadmin', compact('exam_types'), ['pageName' => 'Dashboard']);
    }
    public function class_name()
    {
        return response()->json(ClassMaster::select('id', 'class_name')->get());
    }
    public function filter_datas(Request $request)
    {
        $data = $this->exam_service->getAllDatas($request);
        return response()->json($data);

    }
    public function getSubjects(Request $request)
    {
        $res = $this->exam_service->getExamSubjects($request);
        return response()->json($res);
    }
}