<?php

namespace App\Http\Controllers\Neurologist\ConsultationRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationRequestsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.consultation.index');
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.consultation.detail');
    }
}
