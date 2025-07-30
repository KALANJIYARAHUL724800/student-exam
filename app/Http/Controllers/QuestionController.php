<?php

namespace App\Http\Controllers;

use App\Services\QuestionService;
use Illuminate\Http\Request;
class QuestionController extends Controller
{
    protected $QuestionsService;
    public function __construct(QuestionService $QuestionsService)
    {
        $this->QuestionsService = $QuestionsService;
    }
    public function getQustions(Request $request)
    {
        $question = $this->QuestionsService->getQuestions($request);
        return view('questions', compact('question'), ['pageName' => 'Question Page']);
    }
    public function verification(Request $request)
    {
        $this->QuestionsService->questionVerify($request);
        return redirect()->route('finish-exam');
    }
}