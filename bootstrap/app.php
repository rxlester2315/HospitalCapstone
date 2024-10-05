<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        

       $middleware->alias([

        'hr' =>\App\Http\Middleware\Hr::class,
        'user' =>\App\Http\Middleware\User::class,
         'doc' =>\App\Http\Middleware\Doctor::class,
        'super' =>\App\Http\Middleware\SuperAd::class,
        'front' =>\App\Http\Middleware\FrontDesk::class,
         'nurse' =>\App\Http\Middleware\Nurse::class,
        'admin' =>\App\Http\Middleware\Admin::class,
         'guest' =>\App\Http\Middleware\Guest::class,
          'nonuser' => \App\Http\Middleware\NonUserMiddleware::class,






       ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();