<?php

namespace App\Http\Controllers\Neurologist\Patient;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\Exam;
use App\Models\NeuroAssessment;
use App\Models\Patient;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patients = Patient::with('specieTypeInfo', 'practitionerInfo')->get();
        return view('neurologist.patients.index', compact('patients'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo','breedInfo')->find($patient_id);
        $appointmentsHistory = NeuroAssessment::where('patient_id',$patient_id)->with('treatedByInfo','consultByInfo')->get();
        $breedsSelectedSpecie = Breed::where('specie_id',$patientInfo->specie_type)->get();

        return view('neurologist.patients.detail', compact('patientInfo', 'species', 'breedsSelectedSpecie', 'appointmentsHistory'));
    }

    public function neuroExamDetail($id,$no): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neuro_exam_detail_id = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $neuro_exam_no = Crypt::decrypt($no);
        $neuroExamInfo = NeuroAssessment::with('patientInfo','treatedByInfo','consultByInfo')->find($neuro_exam_detail_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        return view('neurologist.patients.neuro_exam_detail', compact('neuroExamInfo', 'neuro_exam_no', 'examsInfo'));
    }
}
