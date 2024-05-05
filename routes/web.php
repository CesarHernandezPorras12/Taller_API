<?php

use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

Route::get('/', function () {

    Route::middleware([EnsureFrontendRequestsAreStateful::class])->group(function () {
        // Rutas protegidas de la API aquí
        Route::apiResource('televisores', 'API\TelevisorController');
    });
    
});
