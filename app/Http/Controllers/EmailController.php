<?php

namespace App\Http\Controllers;
use App\Services\EmailService;
class EmailController extends Controller
{
    protected $EmailService;
    public function __construct(EmailService $EmailService)
    {
        $this->EmailService = $EmailService;
    }
    public function complete()
    {
        $results = $this->EmailService->complete_exam();
        $this->EmailService->emailsent($results);
        return view('complete', compact('results'), ['pageName' => 'Results Page']);
    }
}