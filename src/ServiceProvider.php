<?php

namespace Iserter\ExpressionEvaluator;


/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 10.12.2015
 * Time: 12:02
 */
class ServiceProvider extends  \Illuminate\Support\ServiceProvider {
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Engine::class, function () {
            return new Engine();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Engine::class];
    }
}