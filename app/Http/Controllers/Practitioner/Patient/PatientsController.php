<?php

namespace App\Http\Controllers\Practitioner\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patients = Patient::where('added_by',auth()->user()->id)->with('specieTypeInfo')->get();
        return view('practitioner.patients.index', compact('patients'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo','breedInfo')->find($patient_id);

        return view('practitioner.patients.detail', compact('patientInfo'));
    }

    public function neuroExam($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.patients.neuro_exam');
    }
}
