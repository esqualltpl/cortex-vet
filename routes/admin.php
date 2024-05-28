<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Neurologist\NeurologistsController;
use App\Http\Controllers\Admin\Patient\PatientsController;
use App\Http\Controllers\Admin\Practitioner\PractitionersController;
use App\Http\Controllers\Admin\Resource\ResourcesController;
use App\Http\Controllers\Admin\Setting\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Portal Route
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    //Veterinary Practitioners & Neurologists
    Route::prefix('veterinary')->group(function () {
        //Veterinary Practitioners
        Route::get('/practitioners', [PractitionersController::class, 'index'])->name('admin.veterinary.practitioners');
        Route::get('/practitioner/detail/{id}', [PractitionersController::class, 'detail'])->name('admin.veterinary.practitioner.detail');
        Route::delete('/practitioner/delete/{id}', [PractitionersController::class, 'delete'])->name('admin.veterinary.practitioner.delete');

        //Veterinary Neurologists
        Route::get('/neurologists', [NeurologistsController::class, 'index'])->name('admin.veterinary.neurologists');
        Route::get('/neurologist/detail/{id}', [NeurologistsController::class, 'detail'])->name('admin.veterinary.neurologist.detail');
        Route::delete('/neurologist/delete/{id}', [NeurologistsController::class, 'delete'])->name('admin.veterinary.neurologist.delete');
    });

    //Resources
    Route::prefix('resources')->group(function () {
        Route::get('/', [ResourcesController::class, 'index'])->name('admin.resources');
    });

    //Patients
    Route::prefix('patient')->group(function () {
        Route::get('/list', [PatientsController::class, 'index'])->name('admin.patients');
        Route::get('/detail/{id}', [PatientsController::class, 'detail'])->name('admin.patient.detail');
        Route::get('/neuro/exam/{id}', [PatientsController::class, 'neuroExam'])->name('admin.patient.neuro.exam');
        Route::delete('/delete/{id}', [PatientsController::class, 'delete'])->name('admin.patient.delete');
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('admin.settings');

        //Profile Information
        Route::prefix('profile')->group(function () {
            Route::post('update', [SettingsController::class, 'updateProfile'])->name('admin.setting.update.profile');
            Route::post('image/update', [SettingsController::class, 'updateProfileImage'])->name('admin.setting.update.profile.image');
        });

        //Update Password
        Route::post('/change/password', [SettingsController::class, 'changeProfilePassword'])->name('admin.setting.change.profile.password');

        //Set Localization Form
        Route::prefix('set/localization/exam')->group(function () {
            Route::get('list', [SettingsController::class, 'SetLocalizationExamList'])->name('admin.setting.exams.list');
            Route::post('add', [SettingsController::class, 'examInfoAdd'])->name('admin.setting.exam.add');

            Route::prefix('upload/instruction/video')->group(function () {
                Route::post('/', [SettingsController::class, 'examUploadInstructionVideoOrUrl'])->name('admin.setting.exam.upload,instruction.video.or.url');
                Route::get('preview/{id}', [SettingsController::class, 'examUploadInstructionVideoPreview'])->name('admin.setting.exam.upload,instruction.video.preview');
            });

            Route::delete('delete/{id}', [SettingsController::class, 'examInfoDelete'])->name('admin.setting.exam.delete');
            Route::delete('test/delete/{id}', [SettingsController::class, 'examTestInfoDelete'])->name('admin.setting.exam.test.delete');

            Route::prefix('test/options')->group(function () {
                Route::post('add', [SettingsController::class, 'examTestOptionsInfoAdd'])->name('admin.setting.exam.test.options.add');
                Route::get('edit/{id}', [SettingsController::class, 'examTestOptionsInfoEdit'])->name('admin.setting.exam.test.options.edit');
                Route::post('update', [SettingsController::class, 'examTestOptionsInfoUpdate'])->name('admin.setting.exam.test.options.update');
            });
        });

        //Set Result
        Route::prefix('set/result')->group(function () {
            Route::get('/', [SettingsController::class, 'setResultList'])->name('admin.setting.set.result.list');
            Route::post('info/save', [SettingsController::class, 'setResultInfoSave'])->name('admin.setting.set.result.info.save');

            Route::prefix('neurolocalization')->group(function () {
                Route::get('info/get', [SettingsController::class, 'getNeurolocalizationList'])->name('admin.setting.get.neurolocalization.list');
                Route::get('preview/{id}', [SettingsController::class, 'neurolocalizationDetailPreview'])->name('admin.setting.get.neurolocalization.preview');
                Route::get('edit/{id}', [SettingsController::class, 'neurolocalizationInfoEdit'])->name('admin.setting.get.neurolocalization.info.edit');
                Route::delete('delete/{id}', [SettingsController::class, 'neurolocalizationInfoDelete'])->name('admin.setting.neurolocalization.info.delete');
            });
        });

        //Student
        Route::prefix('student')->group(function () {
            Route::get('add', [SettingsController::class, 'studentAdd'])->name('admin.settings.student.add');
            Route::get('edit/{id}', [SettingsController::class, 'studentEdit'])->name('admin.settings.student.edit');

        });
    });
});
