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

    //Add New Patient
    Route::prefix('add/new/patient')->group(function () {
        Route::get('/', [DashboardController::class, 'patient'])->name('practitioner.patient');
        Route::post('info/save', [DashboardController::class, 'patientInfoSave'])->name('practitioner.patient.info.save');
        Route::post('info/update', [DashboardController::class, 'patientInfoUpdate'])->name('practitioner.patient.info.update');
    });

    //Get Breed Options
    Route::get('breed/options/{id}', [DashboardController::class, 'breedOptions'])->name('practitioner.breed.options');

    //Consultation Request
    Route::prefix('neuro/assessment')->group(function () {
        Route::get('/', [NeuroAssessmentController::class, 'index'])->name('practitioner.neuro.assessment');
        Route::post('patient/id/info', [NeuroAssessmentController::class, 'patientIdInfo'])->name('practitioner.neuro.assessment.patient.id.info');
        Route::get('exam/{id}', [NeuroAssessmentController::class, 'neuroExam'])->name('practitioner.neuro.assessment.exam');
        Route::get('exam/{id}/result', [NeuroAssessmentController::class, 'neuroExamResult'])->name('practitioner.neuro.assessment.exam.result');
        Route::post('treated/{id}', [NeuroAssessmentController::class, 'treatedInfoSave'])->name('practitioner.neuro.assessment.treated');
    });

    //Patients
    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('practitioner.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('practitioner.patient.detail');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('practitioner.settings');

        //Profile Information
        Route::prefix('profile')->group(function () {
            Route::post('update', [SettingsController::class, 'updateProfile'])->name('practitioner.setting.update.profile');
            Route::post('image/update', [SettingsController::class, 'updateProfileImage'])->name('practitioner.setting.update.profile.image');
        });

        //Update Password
        Route::post('/change/password', [SettingsController::class, 'changeProfilePassword'])->name('practitioner.setting.change.profile.password');

        //Set Localization Form
        Route::prefix('set/localization/exam')->group(function () {
            Route::get('list', [SettingsController::class, 'SetLocalizationExamList'])->name('practitioner.setting.exams.list');
            Route::post('add', [SettingsController::class, 'examInfoAdd'])->name('practitioner.setting.exam.add');

            Route::prefix('upload/instruction/video')->group(function () {
                Route::post('/', [SettingsController::class, 'examUploadInstructionVideoOrUrl'])->name('practitioner.setting.exam.upload,instruction.video.or.url');
                Route::get('preview/{id}', [SettingsController::class, 'examUploadInstructionVideoPreview'])->name('practitioner.setting.exam.upload.instruction.video.preview');
            });

            Route::delete('delete/{id}', [SettingsController::class, 'examInfoDelete'])->name('practitioner.setting.exam.delete');
            Route::delete('test/delete/{id}', [SettingsController::class, 'examTestInfoDelete'])->name('practitioner.setting.exam.test.delete');

            Route::prefix('test/options')->group(function () {
                Route::post('add', [SettingsController::class, 'examTestOptionsInfoAdd'])->name('practitioner.setting.exam.test.options.add');
                Route::get('edit/{id}', [SettingsController::class, 'examTestOptionsInfoEdit'])->name('practitioner.setting.exam.test.options.edit');
                Route::post('update', [SettingsController::class, 'examTestOptionsInfoUpdate'])->name('practitioner.setting.exam.test.options.update');
            });
        });

        //Set Result
        Route::prefix('set/result')->group(function () {
            Route::get('/', [SettingsController::class, 'setResultList'])->name('practitioner.setting.set.result.list');
            Route::post('info/save', [SettingsController::class, 'setResultInfoSave'])->name('practitioner.setting.set.result.info.save');

            Route::prefix('neurolocalization')->group(function () {
                Route::get('info/get', [SettingsController::class, 'getNeurolocalizationList'])->name('practitioner.setting.get.neurolocalization.list');
                Route::get('preview/{id}', [SettingsController::class, 'neurolocalizationDetailPreview'])->name('practitioner.setting.get.neurolocalization.preview');
                Route::get('edit/{id}', [SettingsController::class, 'neurolocalizationInfoEdit'])->name('practitioner.setting.get.neurolocalization.info.edit');
                Route::delete('delete/{id}', [SettingsController::class, 'neurolocalizationInfoDelete'])->name('practitioner.setting.neurolocalization.info.delete');
            });
        });

        //Payments
        Route::post('/set/payment', [SettingsController::class, 'setPayment'])->name('practitioner.setting.set.payment');

        //Student
        Route::prefix('student')->group(function () {
            Route::get('list', [SettingsController::class, 'studentsList'])->name('practitioner.setting.students.list');
            Route::get('add', [SettingsController::class, 'studentAdd'])->name('practitioner.settings.student.add');
            Route::post('save', [SettingsController::class, 'studentSave'])->name('practitioner.setting.student.info.save');
            Route::get('edit/{id}', [SettingsController::class, 'studentEdit'])->name('practitioner.setting.get.student.info.edit');
            Route::post('update', [SettingsController::class, 'studentUpdate'])->name('practitioner.setting.student.info.update');
            Route::delete('/delete/{id}', [SettingsController::class, 'studentDelete'])->name('practitioner.setting.student.info.delete');
        });
    });
});
