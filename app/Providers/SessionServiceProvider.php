<?php

namespace App\Providers;

use Eclair\Session\DatabaseSessionHandler;

class SessionServiceProvider extends \Eclair\Support\ServiceProvider

{
    public static function register()
    {
        session_set_save_handler(new DatabaseSessionHandler());
    }

    public static function boot()
    {
        session_start();
    }
}