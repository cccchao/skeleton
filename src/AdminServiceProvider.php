<?php

namespace Cccchao\Admin;

use Cccchao\Admin\Controllers\HomeController;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(HomeController::class);

        include(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__.'/views', 'admin');
    }
}
