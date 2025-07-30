<?php

namespace App\Http\Controllers;

use App\Services\ResultService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon;
use Illuminate\Support\Facades\Validator;

class PdfGeneratorController extends Controller
{
    protected $resultService;
    public function __construct(ResultService $resultService)
    {
        $this->resultService = $resultService;
    }
    public function pdfGenerate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required|integer',
            "user_id" => "required|integer"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        $validated = $validator->validated();
        $current_time = Carbon\Carbon::now()->toDateTimeString();
        $results = $this->resultService->GetPdf($validated);
        $pdf = Pdf::loadView('marksheetpdf', ['results' => $results]);
        return $pdf->download($request->user_id . '_marksheet.pdf' . $current_time);
    }
}
