<?php

use App\Http\Controllers\Practitioner\NeuroAssessment\NeuroAssessmentController;
use App\Http\Controllers\Practitioner\Dashboard\DashboardController;
use App\Http\Controllers\Practitioner\Patient\PatientsController;
use App\Http\Controllers\Practitioner\Setting\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Practitioner Portal Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'practitioner', 'middleware' => ['practitioner']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('practitioner.dashboard');
    Route::get('/add/new/patient', [DashboardController::class, 'addNewPatient'])->name('practitioner.add.new.patient');

    //Consultation Request
    Route::prefix('neuro/assessment')->group(function () {
        Route::get('/', [NeuroAssessmentController::class, 'index'])->name('practitioner.neuro.assessment');
        Route::get('exam/{id}', [NeuroAssessmentController::class, 'neuroExam'])->name('practitioner.neuro.assessment.exam');
    });

    //Patients
    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('practitioner.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('practitioner.patient.detail');
        Route::get('/neuro/exam/{id}', [PatientsController::class, 'neuroExam'])->name('practitioner.patient.neuro.exam');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('practitioner.settings');
    });
});
