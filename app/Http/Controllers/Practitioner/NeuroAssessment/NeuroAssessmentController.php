<?php

namespace App\Http\Controllers\Practitioner\NeuroAssessment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NeuroAssessmentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.neuroAssessment.index');
    }

    public function neuroExam($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.neuroAssessment.exam');
    }
}
