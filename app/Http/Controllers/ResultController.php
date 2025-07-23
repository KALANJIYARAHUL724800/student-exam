<?php

namespace App\Http\Controllers;

use App\Models\StudentOverallMarks;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function success(Request $request)
    {
        dd($request->all());
    }
}
