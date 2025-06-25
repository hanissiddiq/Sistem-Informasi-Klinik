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
        $middleware->alias([
            'is_super_admin' => App\Http\Middleware\IsSuperAdmin::class,
            'is_admin' => App\Http\Middleware\IsAdmin::class,
            'is_patient' => App\Http\Middleware\IsPatient::class,
            'single.device' => App\Http\Middleware\SingleDeviceLogin::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
