<?php

namespace Cccchao\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * 服務提供者加是否延遲載入.
     *
     * @var bool
     */
    protected $defer = true; // 延遲載入服務

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 單例繫結服務
        $this->app->singleton('admin', function ($app) {
            return new Admin($app['session'], $app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'admin');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/cccchao'),  // 釋出檢視目錄到resources 下
            __DIR__.'/config/Admin.php' => config_path('Admin.php'), // 釋出配置檔案到 laravel 的config 下
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // 因為延遲載入 所以要定義 provides 函式 具體參考laravel 文件
        return ['admin'];
    }
}
