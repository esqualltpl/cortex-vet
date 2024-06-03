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

    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('neurologist.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('neurologist.patient.detail');
        Route::get('neuro/exam/detail/{id}/{no}', [PatientsController::class, 'neuroExamDetail'])->name('neurologist.patient.neuro.exam.detail');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('neurologist.settings');

        //Profile Information
        Route::prefix('profile')->group(function () {
            Route::post('update', [SettingsController::class, 'updateProfile'])->name('neurologist.setting.update.profile');
            Route::post('image/update', [SettingsController::class, 'updateProfileImage'])->name('neurologist.setting.update.profile.image');
        });

        //Update Password
        Route::post('/change/password', [SettingsController::class, 'changeProfilePassword'])->name('neurologist.setting.change.profile.password');
    });
});


