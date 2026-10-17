<?php

declare(strict_types=1);

/**
 * EOS Optica - Front Controller
 * Arquitectura MVC orientada a objetos con PSR-4 y Bootstrap 5
 */

$autoloader = dirname(__DIR__) . '/vendor/autoload.php';
if (file_exists($autoloader)) {
    require_once $autoloader;
} else {
    // Fallback PSR-4 autonomo en caso de despliegue sin carpeta vendor/
    $helpersFile = dirname(__DIR__) . '/app/Helpers/helpers.php';
    if (file_exists($helpersFile)) {
        require_once $helpersFile;
    }
    spl_autoload_register(static function (string $class): void {
        $prefix = 'App\\';
        if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
            return;
        }
        $file = dirname(__DIR__) . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    });
}

header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
header('Pragma: no-cache');

use App\Core\Request;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\BookingController;

// Instanciar peticion y enrutador
$request = new Request();
$router  = new Router();

// Registro de Rutas Principales y API
$router->get('/', [HomeController::class, 'index']);
$router->get('/api/catalog', [HomeController::class, 'catalogJson']);
$router->get('/api/lenses', [HomeController::class, 'lensesJson']);
$router->post('/api/booking', [BookingController::class, 'store']);

// Despachar la peticion de forma resiliente
$router->dispatch($request);
