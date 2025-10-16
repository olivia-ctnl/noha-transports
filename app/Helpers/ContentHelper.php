<?php

use App\Models\Content;

if (!function_exists('content')) {
    function content($key, $default = null)
    {
        return Content::getValue($key, $default);
    }
}
