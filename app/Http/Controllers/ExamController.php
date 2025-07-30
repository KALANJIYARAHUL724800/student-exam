<?php

namespace App\Http\Controllers;
use App\Services\ExamService;
class ExamController extends Controller
{
    protected $ExamService;
    public function __construct(ExamService $ExamService)
    {
        $this->ExamService = $ExamService;
    }
    public function showExamPage()
    {
        $exam_types = $this->ExamService->show_ExamType();
        return view('exam', compact('exam_types'), ['pageName' => 'Exam Page']);
    }
}
