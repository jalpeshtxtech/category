<?php

namespace Jalpeshtxtech\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'category');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        /*
        * Register the service provider for the dependency.
        */
        $this->app->register('Jalpeshtxtech\Category\CategoryProvider');
        /*
        * Create aliases for the dependency.
        */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('AuthorizationServer', 'Jalpeshtxtech\Category\Facades\CategoryFacade');
        $loader->alias('ResourceServer', 'Jalpeshtxtech\Category\Facades\ResourceServerFacade');
    }
}
