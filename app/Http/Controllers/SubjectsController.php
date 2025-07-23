<?php

namespace App\Http\Controllers;
use App\Services\SubjectsService;

class SubjectsController extends Controller
{
    protected $subjects_service;
    public function __construct(SubjectsService $subjects)
    {
        $this->subjects_service = $subjects;
    }
    public function getSubjects($id)
    {
        $subjects = $this->subjects_service->getSubjectsService($id);
        return response()->json($subjects);
    }
}
