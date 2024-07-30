<?php

use App\Http\Controllers\Student\NeuroAssessment\NeuroAssessmentController;
use App\Http\Controllers\Student\Dashboard\DashboardController;
use App\Http\Controllers\Student\Patient\PatientsController;
use App\Http\Controllers\Student\Setting\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Portal Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'student', 'middleware' => ['student']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('student.dashboard');
    Route::post('active/notification', [DashboardController::class, 'activeNotificationSeen'])->name('student.active.notification.seen');

    //Add New Patient
    Route::prefix('add/new/patient')->group(function () {
        Route::get('/', [DashboardController::class, 'patient'])->name('student.patient');
        Route::post('info/save', [DashboardController::class, 'patientInfoSave'])->name('student.patient.info.save');
        Route::post('info/update', [DashboardController::class, 'patientInfoUpdate'])->name('student.patient.info.update');
    });

    //Get Breed Options
    Route::get('breed/options/{id}', [DashboardController::class, 'breedOptions'])->name('student.breed.options');

    //Consultation Request
    Route::prefix('neuro/assessment')->group(function () {
        Route::get('/', [NeuroAssessmentController::class, 'index'])->name('student.neuro.assessment');
        Route::post('patient/id/info', [NeuroAssessmentController::class, 'patientIdInfo'])->name('student.neuro.assessment.patient.id.info');
        Route::get('exam/{id}', [NeuroAssessmentController::class, 'neuroExam'])->name('student.neuro.assessment.exam');
        Route::get('exam/{id}/detail/{na_id}', [NeuroAssessmentController::class, 'neuroExam'])->name('student.neuro.assessment.detail');
        Route::get('exam/{id}/result', [NeuroAssessmentController::class, 'neuroExamResult'])->name('student.neuro.assessment.exam.result');
        Route::post('consult/neurologist/{id}', [NeuroAssessmentController::class, 'consultNeurologistRequest'])->name('student.neuro.assessment.consult.neurologist.request');
        Route::post('treated/{id}', [NeuroAssessmentController::class, 'treatedInfoSave'])->name('student.neuro.assessment.treated');
    });

    //Patients
    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('student.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('student.patient.detail');
        Route::get('neuro/exam/detail/{id}/{no}', [PatientsController::class, 'neuroExamDetail'])->name('student.patient.neuro.exam.detail');
        Route::post('send/detail/report', [PatientsController::class, 'sendDetailReport'])->name('student.patient.send.detail.report');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('student.settings');

        //Profile Information
        Route::prefix('profile')->group(function () {
            Route::post('update', [SettingsController::class, 'updateProfile'])->name('student.setting.update.profile');
            Route::post('image/update', [SettingsController::class, 'updateProfileImage'])->name('student.setting.update.profile.image');
        });

        //Update Password
        Route::post('/change/password', [SettingsController::class, 'changeProfilePassword'])->name('student.setting.change.profile.password');

        //Set Localization Form
        Route::prefix('set/localization/exam')->group(function () {
            Route::get('list', [SettingsController::class, 'SetLocalizationExamList'])->name('student.setting.exams.list');
            Route::post('add', [SettingsController::class, 'examInfoAdd'])->name('student.setting.exam.add');

            Route::prefix('upload/instruction/video')->group(function () {
                Route::post('/', [SettingsController::class, 'examUploadInstructionVideoOrUrl'])->name('student.setting.exam.upload,instruction.video.or.url');
                Route::get('preview/{id}', [SettingsController::class, 'examUploadInstructionVideoPreview'])->name('student.setting.exam.upload.instruction.video.preview');
            });

            Route::delete('delete/{id}', [SettingsController::class, 'examInfoDelete'])->name('student.setting.exam.delete');
            Route::delete('test/delete/{id}', [SettingsController::class, 'examTestInfoDelete'])->name('student.setting.exam.test.delete');

            Route::prefix('test/options')->group(function () {
                Route::post('add', [SettingsController::class, 'examTestOptionsInfoAdd'])->name('student.setting.exam.test.options.add');
                Route::get('edit/{id}', [SettingsController::class, 'examTestOptionsInfoEdit'])->name('student.setting.exam.test.options.edit');
                Route::post('update', [SettingsController::class, 'examTestOptionsInfoUpdate'])->name('student.setting.exam.test.options.update');
            });
        });

        //Set Result
        Route::prefix('set/result')->group(function () {
            Route::get('/', [SettingsController::class, 'setResultList'])->name('student.setting.set.result.list');
            Route::post('info/save', [SettingsController::class, 'setResultInfoSave'])->name('student.setting.set.result.info.save');

            Route::prefix('neurolocalization')->group(function () {
                Route::get('info/get', [SettingsController::class, 'getNeurolocalizationList'])->name('student.setting.get.neurolocalization.list');
                Route::get('preview/{id}', [SettingsController::class, 'neurolocalizationDetailPreview'])->name('student.setting.get.neurolocalization.preview');
                Route::get('edit/{id}', [SettingsController::class, 'neurolocalizationInfoEdit'])->name('student.setting.get.neurolocalization.info.edit');
                Route::delete('delete/{id}', [SettingsController::class, 'neurolocalizationInfoDelete'])->name('student.setting.neurolocalization.info.delete');
            });
        });

        //Payments
        Route::post('/set/payment', [SettingsController::class, 'setPayment'])->name('student.setting.set.payment');

        //Student
        Route::prefix('student')->group(function () {
            Route::get('list', [SettingsController::class, 'studentsList'])->name('student.setting.students.list');
            Route::get('add', [SettingsController::class, 'studentAdd'])->name('student.settings.student.add');
            Route::post('save', [SettingsController::class, 'studentSave'])->name('student.setting.student.info.save');
            Route::get('edit/{id}', [SettingsController::class, 'studentEdit'])->name('student.setting.get.student.info.edit');
            Route::post('update', [SettingsController::class, 'studentUpdate'])->name('student.setting.student.info.update');
            Route::delete('/delete/{id}', [SettingsController::class, 'studentDelete'])->name('student.setting.student.info.delete');
        });
    });
});
