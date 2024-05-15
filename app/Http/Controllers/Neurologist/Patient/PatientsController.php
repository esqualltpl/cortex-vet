<?php

namespace App\Http\Controllers\Neurologist\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.patients.index');
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.patients.detail');
    }
}
