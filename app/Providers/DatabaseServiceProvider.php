<?php

namespace App\Providers;

use Eclair\Support\ServiceProvider;
use Eclair\Database\Adaptor;

class DatabaseServiceProvider extends ServiceProvider
{
    public static function register()
    {
        Adaptor::setup('mysql:dbname=phpblogoop;host=localhost;port=3306;', 'root', '1234');
    }

}