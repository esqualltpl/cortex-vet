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
    Route::post('active/notification', [DashboardController::class, 'activeNotificationSeen'])->name('neurologist.active.notification.seen');

    //Consultation Request
    Route::prefix('consultation/request')->group(function () {
        Route::get('/list', [ConsultationRequestsController::class, 'index'])->name('neurologist.consultation.request');
        Route::get('/detail/{id}', [ConsultationRequestsController::class, 'detail'])->name('neurologist.consultation.detail');
        Route::post('/accept/{id}', [ConsultationRequestsController::class, 'acceptRequest'])->name('neurologist.consultation.detail.accept.request');
        Route::delete('/comment/delete/{request_id}/{comment_id}', [ConsultationRequestsController::class, 'deleteComment'])->name('neurologist.consultation.detail.comment.delete');
        Route::post('/communicate/directly/{id}', [ConsultationRequestsController::class, 'communicateDirectly'])->name('neurologist.consultation.request.communicate.directly');
        Route::post('/perform/{id}/share/through/email', [ConsultationRequestsController::class, 'performShareThroughEmail'])->name('neurologist.consultation.request.perform.share.through.email');
    });

    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('neurologist.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('neurologist.patient.detail');
        Route::get('neuro/exam/detail/{id}/{no}', [PatientsController::class, 'neuroExamDetail'])->name('neurologist.patient.neuro.exam.detail');
        Route::get('/notes/get/{id}', [PatientsController::class, 'getNeuroAssessmentNotes'])->name('neurologist.patients.neuro.assessment.get.notes');
        Route::post('/notes/save', [PatientsController::class, 'saveNeuroAssessmentNotes'])->name('neurologist.patients.neuro.assessment.save.notes');
        Route::get('report/detail/{id}', [PatientsController::class, 'reportDetail'])->name('neurologist.patients.report.detail');

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


