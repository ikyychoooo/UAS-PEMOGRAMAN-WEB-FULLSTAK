<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(web: __DIR__ . '/../routes/web.php', commands: __DIR__ . '/../routes/console.php', health: '/up')
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            // Tambahkan baris ini
            'CheckAdmin' => \App\Http\Middleware\CheckAdmin::class,
            'CheckUser' => \App\Http\Middleware\CheckUser::class,
        ]);
        $middleware->redirectGuestsTo(function ($request) {
            return $request->is('admin*') ? route('admin.login') : route('login-page');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
