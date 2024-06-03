<?php

namespace App\Http\Controllers\Neurologist\ConsultationRequest;

use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ConsultationRequestsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $consultationRequests = ConsultationRequest::where('accept_by', null)->orWhere('accept_by', auth()->user()->id)->with('neuroAssessmentInfo')->get();
        return view('neurologist.consultation.index', compact('consultationRequests'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $requestId = Crypt::decrypt($id);
        $consultationRequest = ConsultationRequest::with('neuroAssessmentInfo')->find($requestId);
        return view('neurologist.consultation.detail', compact('consultationRequest'));
    }
}
