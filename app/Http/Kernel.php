<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Middleware global
        \App\Http\Middleware\CheckAdmin::class, // Adicione aqui se quiser que seja global
        // Outros middlewares globais...
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Middleware de rota
        'admin' => \App\Http\Middleware\CheckAdmin::class, // Certifique-se de que esta linha está presente
        // Outros middlewares de rota...
    ];
}