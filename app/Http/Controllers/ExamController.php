<?php

namespace App\Http\Controllers;
use App\Services\ExamService;
class ExamController extends Controller
{
    protected $exam_service;
    public function __construct(ExamService $exam_service)
    {
        $this->exam_service = $exam_service;
    }
    public function showExamPage()
    {
        $exam_types = $this->exam_service->show_ExamType();
        return view('exam', compact('exam_types'), ['pageName' => 'Exam Page']);
    }
}
