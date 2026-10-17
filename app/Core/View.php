<?php

declare(strict_types=1);

namespace App\Core;

class View
{
    private static string $viewsPath;

    public static function init(): void
    {
        self::$viewsPath = dirname(__DIR__) . '/Views/';
    }

    public static function render(string $view, array $data = [], ?string $layout = 'main'): void
    {
        if (!isset(self::$viewsPath)) {
            self::init();
        }

        $viewFile = self::$viewsPath . str_replace('.', '/', $view) . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(500);
            echo "Error: La vista '" . e($view) . "' no fue encontrada.";
            return;
        }

        extract($data, EXTR_SKIP);

        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        if ($layout !== null) {
            $layoutFile = self::$viewsPath . 'layouts/' . $layout . '.php';
            if (file_exists($layoutFile)) {
                require $layoutFile;
                return;
            }
        }

        echo $content;
    }

    public static function partial(string $partial, array $data = []): void
    {
        if (!isset(self::$viewsPath)) {
            self::init();
        }

        $partialFile = self::$viewsPath . str_replace('.', '/', $partial) . '.php';

        if (file_exists($partialFile)) {
            extract($data, EXTR_SKIP);
            require $partialFile;
        }
    }
}
