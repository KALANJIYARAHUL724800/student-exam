<?php

use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\SuperAdminMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Tymon\JWTAuth\Facades\JWTAuth;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        api: __DIR__ . '/../routes/api.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'login' => LoginMiddleware::class,
            'authmiddleware' => AuthenticateMiddleware::class,
            'superadmin' => SuperAdminMiddleware::class,
            'jwt' => JwtMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
