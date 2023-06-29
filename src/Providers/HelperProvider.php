<?php

namespace Alsace\Helper\Providers;

use Illuminate\Support\ServiceProvider;

class HelperProvider extends ServiceProvider{
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'helper');
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR."helpers.php";
        if (file_exists($file)) { 
            require $file;
        }
    }
}








?>