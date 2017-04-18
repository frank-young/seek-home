<?php namespace Nanacms\Admin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class AdminServiceprovider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'admin');
        $this->setupRoutes($this->app->router);
        // this for conig
        $this->publishes([
            __DIR__.'/config/admin.php' => config_path('admin.php'),
        ]);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Nanacms\Admin\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    public function register()
    {
        $this->registerAdmin();
        config([
            'config/admin.php',
        ]);
    }
    private function registerAdmin()
    {
        $this->app->bind('admin',function($app){
            return new Admin($app);
        });
    }
}
