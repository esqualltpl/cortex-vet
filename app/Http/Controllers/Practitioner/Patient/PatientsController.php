<?php

namespace App\Http\Controllers\Practitioner\Patient;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\Patient;
use App\Models\Specie;
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
        $species = Specie::all();
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo','breedInfo')->find($patient_id);
        $breedsSelectedSpecie = Breed::where('specie_id',$patientInfo->specie_type)->get();

        return view('practitioner.patients.detail', compact('patientInfo', 'species', 'breedsSelectedSpecie'));
    }

    public function neuroExam($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.patients.neuro_exam');
    }
}
