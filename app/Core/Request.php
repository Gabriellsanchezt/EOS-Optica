<?php

declare(strict_types=1);

namespace App\Core;

class Request
{
    private array $data;
    private string $method;
    private string $path;

    public function __construct()
    {
        $this->method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $this->data   = $this->parseInput();
        $this->path   = $this->resolvePath();
    }

    public function method(): string
    {
        return $this->method;
    }

    public function isPost(): bool
    {
        return $this->method === 'POST';
    }

    public function isGet(): bool
    {
        return $this->method === 'GET';
    }

    public function path(): string
    {
        return $this->path;
    }

    public function input(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return $this->data;
        }
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function ip(): string
    {
        if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return (string) $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', (string) $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ips[0]);
        }
        return (string) ($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
    }

    public function userAgent(): string
    {
        return substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'), 0, 255);
    }

    private function parseInput(): array
    {
        $input = array_merge($_GET, $_POST);
        $contentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';
        if (str_contains(strtolower((string) $contentType), 'application/json')) {
            $raw = (string) file_get_contents('php://input');
            if ($raw !== '') {
                $json = json_decode($raw, true);
                if (is_array($json)) {
                    $input = array_merge($input, $json);
                }
            }
        }
        return $input;
    }

    private function resolvePath(): string
    {
        // 1. Soporte explicito por query parameter (?route=/api/booking) para hostings sin mod_rewrite
        if (!empty($_GET['route']) && is_string($_GET['route'])) {
            $routeParam = '/' . trim($_GET['route'], '/');
            return $routeParam === '/' ? '/' : $routeParam;
        }

        // 2. Soporte por PATH_INFO (/index.php/api/booking)
        if (!empty($_SERVER['PATH_INFO']) && is_string($_SERVER['PATH_INFO'])) {
            $pathInfo = '/' . trim($_SERVER['PATH_INFO'], '/');
            return $pathInfo === '/' ? '/' : $pathInfo;
        }

        // 3. Resolucion estandar por REQUEST_URI (Dominio raiz o subcarpeta)
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $uri = parse_url($uri, PHP_URL_PATH) ?? '/';

        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $scriptDir  = str_replace('\\', '/', dirname($scriptName));
        $scriptDir  = rtrim($scriptDir, '/');

        if ($scriptDir !== '' && $scriptDir !== '/' && $scriptDir !== '.' && str_starts_with($uri, $scriptDir)) {
            $uri = substr($uri, strlen($scriptDir));
        } else {
            $parentDir = str_replace('\\', '/', dirname($scriptDir));
            $parentDir = rtrim($parentDir, '/');
            if ($parentDir !== '' && $parentDir !== '/' && $parentDir !== '.' && str_starts_with($uri, $parentDir)) {
                $uri = substr($uri, strlen($parentDir));
            }
        }

        // Limpiar prefijo /index.php si aparece en la URI
        if (str_starts_with($uri, '/index.php')) {
            $uri = substr($uri, 10);
        }

        $uri = '/' . trim($uri, '/');
        return $uri === '/' ? '/' : $uri;
    }
}
