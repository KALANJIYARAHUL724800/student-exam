<?php

namespace App\Http\Controllers;
use App\Services\SubjectsService;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    protected $SubjectsService;
    public function __construct(SubjectsService $SubjectsService)
    {
        $this->SubjectsService = $SubjectsService;
    }
    public function getSubjects(Request $request)
    {
        $subjects = $this->SubjectsService->getSubjectsService($request->exam_id);
        return response()->json($subjects);
    }
}
