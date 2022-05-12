<?php

namespace App\Providers;

use Eclair\Support\Theme;

class ThemeServiceProvider extends ServiceProvider
{
    public static function register()
    {
        Theme::setLayout(dirname(__DIR__, 2) . '/resource/views/layout/app.php');
    }

}