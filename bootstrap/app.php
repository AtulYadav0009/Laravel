<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\Setland;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->append(AgeCheck::class);
        $middleware->appendToGroup('Checkone',[AgeCheck::class,CountryCheck::class ]);
        $middleware->appendToGroup('lang',[Setland::class ]);
    }) 
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
