<?php

use App\Http\Controllers\Neurologist\ConsultationRequest\ConsultationRequestsController;
use App\Http\Controllers\Neurologist\Dashboard\DashboardController;
use App\Http\Controllers\Neurologist\Patient\PatientsController;
use App\Http\Controllers\Neurologist\Setting\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Neurologist Portal Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'neurologist', 'middleware' => ['neurologist']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('neurologist.dashboard');

    //Consultation Request
    Route::prefix('consultation/request')->group(function () {
        Route::get('/list', [ConsultationRequestsController::class, 'index'])->name('neurologist.consultation.request');
        Route::get('/detail/{id}', [ConsultationRequestsController::class, 'detail'])->name('neurologist.consultation.detail');
    });

    //Patients
    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('neurologist.patients');
        Route::get('/neuro/exam/{id}', [PatientsController::class, 'neuroExam'])->name('neurologist.patient.neuro.exam');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('neurologist.patient.detail');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('neurologist.settings');
    });
});


