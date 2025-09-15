<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Отключаем RegisterFacades, чтобы избежать записи в cache
$app = new Illuminate\Foundation\Application(dirname(__DIR__));
$app->useBootstrapPath(dirname(__DIR__) . '/bootstrap');
$app->instance('Illuminate\Foundation\PackageManifest', new class {
    public function getManifest() { return []; }
    public function config($key = null, $default = null) { return []; }
});

return $app->configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();