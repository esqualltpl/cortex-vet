<?php

use App\Http\Controllers\Neurologist\Authentication\AuthenticationController;
use App\Http\Controllers\Neurologist\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Neurologist Portal Route
|--------------------------------------------------------------------------
*/
Route::prefix('neurologist')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('neurologist.authentication.login');
    Route::get('/sign/up', [AuthenticationController::class, 'signUp'])->name('neurologist.authentication.sign.up');
    Route::post('/sign/up/save', [AuthenticationController::class, 'signUpSave'])->name('neurologist.authentication.sign.up.save');
    Route::get('/forget/password', [AuthenticationController::class, 'forgot'])->name('neurologist.authentication.forgot');
    Route::get('/password/success/{email}/{password}', [AuthenticationController::class, 'resetPasswordSuccess'])->name('neurologist.authentication.resetPassword.success');
    Route::get('/magically/login/{email}/{password}', [AuthenticationController::class, 'magicallyLogin'])->name('neurologist.authentication.magically.login');
});

Route::group(['prefix' => 'neurologist', 'middleware' => ['neurologist']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('neurologist.dashboard');
});
