<?php

use App\Http\Controllers\Practitioner\Authentication\AuthenticationController;
use App\Http\Controllers\Practitioner\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Practitioner Portal Route
|--------------------------------------------------------------------------
*/
Route::prefix('practitioner')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('practitioner.authentication.login');
    Route::get('/forget/password', [AuthenticationController::class, 'forgot'])->name('practitioner.authentication.forgot');
    Route::get('/password/success/{email}/{password}', [AuthenticationController::class, 'resetPasswordSuccess'])->name('practitioner.authentication.resetPassword.success');
    Route::get('/magically/login/{email}/{password}', [AuthenticationController::class, 'magicallyLogin'])->name('practitioner.authentication.magically.login');
});

Route::group(['prefix' => 'practitioner', 'middleware' => ['practitioner']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('practitioner.dashboard');
});
