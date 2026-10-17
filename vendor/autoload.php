<?php

declare(strict_types=1);

/**
 * Resilient PSR-4 Autoloader & Helper Bootstrapper
 * Funciona de forma autonoma sin depender de ejecucion externa de Composer,
 * manteniendo compatibilidad total con la estructura PSR-4 (App\ -> app/).
 */

$helpersFile = dirname(__DIR__) . '/app/Helpers/helpers.php';
if (file_exists($helpersFile)) {
    require_once $helpersFile;
}

spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    $baseDir = dirname(__DIR__) . '/app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
