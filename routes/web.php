<?php

use App\Http\Controllers\Admin\Authentication\AuthenticationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Portal Route
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('admin.authentication.login');
    Route::get('/forget/password', [AuthenticationController::class, 'forgot'])->name('admin.authentication.forgot');
    Route::get('/password/success/{email}/{password}', [AuthenticationController::class, 'resetPasswordSuccess'])->name('admin.authentication.resetPassword.success');
    Route::get('/magically/login/{email}/{password}', [AuthenticationController::class, 'magicallyLogin'])->name('admin.authentication.magically.login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', [App\Http\Controllers\Admin\Dashboard\DashboardController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/', function () {})->middleware('check.user');
require __DIR__ . '/auth.php';
