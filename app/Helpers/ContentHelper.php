<?php

use App\Services\ContentCacheService;

if (!function_exists('content')) {
    function content($key, $default = null)
    {
        $service = app(ContentCacheService::class);
        return $service->get($key, $default);
    }
}