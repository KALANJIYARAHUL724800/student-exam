<?php

namespace App\Http\Controllers;
use App\Services\EmailService;
class EmailController extends Controller
{
    protected $emailService;
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }
    public function emailsent()
    {
        //$this->emailService->emailsent();
        return redirect()->route('finish-exam');
    }
    public function complete()
    {
        $results = $this->emailService->complete_exam();
        $this->emailService->emailsent($results);
        return view('complete', compact('results'), ['pageName' => 'Results Page']);
    }
}