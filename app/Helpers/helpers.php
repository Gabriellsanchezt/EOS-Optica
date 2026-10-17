<?php

declare(strict_types=1);

if (!function_exists('config')) {
    /**
     * Obtener valor de configuracion de config/config.php usando notacion punto
     */
    function config(?string $key = null, mixed $default = null): mixed
    {
        static $config = null;
        if ($config === null) {
            $configFile = dirname(__DIR__, 2) . '/config/config.php';
            $config = file_exists($configFile) ? require $configFile : [];
        }

        if ($key === null) {
            return $config;
        }

        $segments = explode('.', $key);
        $current = $config;
        foreach ($segments as $segment) {
            if (is_array($current) && array_key_exists($segment, $current)) {
                $current = $current[$segment];
            } else {
                return $default;
            }
        }

        return $current;
    }
}

if (!function_exists('is_https')) {
    /**
     * Detecta HTTPS de forma compatible con cPanel, Cloudflare y proxies inversos
     */
    function is_https(): bool
    {
        if (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off') {
            return true;
        }
        if (isset($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443) {
            return true;
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower((string) $_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https') {
            return true;
        }
        if (!empty($_SERVER['HTTP_CF_VISITOR']) && str_contains((string) $_SERVER['HTTP_CF_VISITOR'], '"scheme":"https"')) {
            return true;
        }
        return false;
    }
}

if (!function_exists('base_url')) {
    /**
     * Retorna la ruta base de la aplicacion funcionando tanto en dominio raiz de hosting (public_html)
     * como en subcarpetas locales (XAMPP /eosoptica).
     */
    function base_url(string $path = ''): string
    {
        static $baseUrl = null;
        if ($baseUrl === null) {
            $configured = config('app.base_url');
            if (!empty($configured)) {
                $baseUrl = rtrim((string) $configured, '/');
            } else {
                if (php_sapi_name() === 'cli') {
                    $baseUrl = '';
                } else {
                    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
                    $dir = str_replace('\\', '/', dirname($scriptName));
                    $dir = rtrim($dir, '/');
                    if (str_ends_with($dir, '/public')) {
                        $dir = substr($dir, 0, -7);
                    }
                    $baseUrl = ($dir === '' || $dir === '.' || $dir === '/') ? '' : $dir;
                }
            }
        }

        $path = ltrim($path, '/');
        if ($baseUrl === '') {
            return '/' . $path;
        }
        return $baseUrl . ($path !== '' ? '/' . $path : '');
    }
}

if (!function_exists('full_url')) {
    /**
     * Retorna la URL absoluta con esquema y dominio (ideal para SEO, OpenGraph y Schema.org en hosting)
     */
    function full_url(string $path = ''): string
    {
        if (php_sapi_name() === 'cli') {
            return base_url($path);
        }
        $scheme = is_https() ? 'https' : 'http';
        $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
        return $scheme . '://' . $host . base_url($path);
    }
}

if (!function_exists('asset')) {
    /**
     * Retorna la ruta al recurso estatico (css, js, img) con cache-busting automatico
     * basado en filemtime para evitar problemas de cache al actualizar en el hosting.
     */
    function asset(string $path): string
    {
        $path = trim($path, '/');

        if (!str_starts_with($path, 'assets/')) {
            if (str_starts_with($path, 'img/')) {
                $path = 'assets/' . $path;
            } elseif (str_starts_with($path, 'images/')) {
                $path = 'assets/img/' . substr($path, 7);
            } elseif (str_starts_with($path, 'css/')) {
                $path = 'assets/' . $path;
            } elseif (str_starts_with($path, 'js/')) {
                $path = 'assets/' . $path;
            }
        }

        $rootFile = dirname(__DIR__, 2) . '/' . $path;
        $version  = file_exists($rootFile) ? (string) filemtime($rootFile) : null;

        $base = base_url();
        $url  = ($base === '' || $base === '/') ? '/' . $path : $base . '/' . $path;

        return $version !== null ? $url . '?v=' . $version : $url;
    }
}

if (!function_exists('url')) {
    /**
     * Retorna una URL interna de la aplicacion
     */
    function url(string $path = ''): string
    {
        return base_url($path);
    }
}

if (!function_exists('wa_link')) {
    /**
     * Genera un enlace directo a WhatsApp con mensaje codificado
     */
    function wa_link(string $message): string
    {
        $number = (string) config('whatsapp.number', '584129515387');
        return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
    }
}

if (!function_exists('e')) {
    /**
     * Escapar cadenas para salida segura en HTML (Prevencion XSS)
     */
    function e(?string $value): string
    {
        return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
    }
}
