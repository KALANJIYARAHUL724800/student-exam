<?php

namespace App\Http\Controllers;

use App\Services\QuestionService;
use Illuminate\Http\Request;
class QuestionController extends Controller
{
    protected $questionsService;
    public function __construct(QuestionService $questionsService)
    {
        $this->questionsService = $questionsService;
    }
    public function getQustions(Request $request)
    {
        $question = $this->questionsService->getQuestions($request);
        return view('questions', compact('question'), ['pageName' => 'Question Page']);
    }
    public function verification(Request $request)
    {
        $this->questionsService->questionVerify($request);
        return redirect()->route('finish-exam');
    }
}