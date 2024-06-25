<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [
            \App\Http\Middleware\Admin::class,
        ]);
        $middleware->appendToGroup('neurologist', [
            \App\Http\Middleware\Neurologist::class,
        ]);
        $middleware->appendToGroup('practitioner', [
            \App\Http\Middleware\Practitioner::class,
        ]);
        $middleware->appendToGroup('student', [
            \App\Http\Middleware\Student::class,
        ]);
        $middleware->appendToGroup('check.user', [
            \App\Http\Middleware\CheckUser::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
