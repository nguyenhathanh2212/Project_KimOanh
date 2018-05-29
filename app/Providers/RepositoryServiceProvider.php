<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\News\NewsInterface::class,
            \App\Repositories\News\NewsEloquentRepository::class
        );
       $this->app->bind(
            \App\Repositories\Category\CategoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class
        );
    }
}
