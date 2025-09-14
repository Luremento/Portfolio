<?php

/**
 * Laravel Serverless Entry Point for Vercel
 * Handles all routes (web + API) by bootstrapping Laravel.
 */

// Увеличиваем лимит памяти для serverless (если нужно)
ini_set('memory_limit', '512M');

// Определяем время старта
define('LARAVEL_START', microtime(true));

// Проверяем maintenance mode (но на Vercel это редко работает)
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Подключаем Composer autoload (vendor должен быть включён через includeFiles)
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);