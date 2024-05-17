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
        Route::post('/change/password',  [SettingsController::class, 'changeProfilePassword'])->name('admin.setting.change.profile.password');

        //Set Localization Form
        Route::prefix('set/localization')->group(function () {
            Route::get('/', [SettingsController::class, 'localizationExamFormList'])->name('admin.setting.localization.exam.form.list');
            Route::post('exam/add', [SettingsController::class, 'examInfoAdd'])->name('admin.setting.exam.add');
        });

        //Student
        Route::prefix('student')->group(function () {
            Route::get('add', [SettingsController::class, 'studentAdd'])->name('admin.settings.student.add');
            Route::get('edit/{id}', [SettingsController::class, 'studentEdit'])->name('admin.settings.student.edit');

        });
    });
});
