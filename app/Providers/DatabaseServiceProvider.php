<?php

namespace App\Providers;

use Eclair\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public static function register()
    {
        Adaptor::setup('mysql:host=localhost;port=3306;dbname=phpblogoop', 'root', '1234');
    }
}