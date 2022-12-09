<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\EndUserInterface' ,
            'App\Http\Repositories\EndUserRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\AboutInterface' ,
            'App\Http\Repositories\AdminRepositories\AboutRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\ServiceInterface' ,
            'App\Http\Repositories\AdminRepositories\ServiceRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\TeamInterface' ,
            'App\Http\Repositories\AdminRepositories\TeamRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\AuthInterface' ,
            'App\Http\Repositories\AdminRepositories\AuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\PortfolioInterface' ,
            'App\Http\Repositories\AdminRepositories\PortfolioRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\AdminInterfaces\ContactInterface' ,
            'App\Http\Repositories\AdminRepositories\ContactRepository'
        );


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
