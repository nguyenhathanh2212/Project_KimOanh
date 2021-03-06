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
            \App\Repositories\TypeNews\TypeNewsInterface::class,
            \App\Repositories\TypeNews\TypeNewsEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\TypeProject\TypeProjectInterface::class,
            \App\Repositories\TypeProject\TypeProjectEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Project\ProjectInterface::class,
            \App\Repositories\Project\ProjectEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Library\LibraryInterface::class,
            \App\Repositories\Library\LibraryEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\TypeLibrary\TypeLibraryInterface::class,
            \App\Repositories\TypeLibrary\TypeLibraryEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\User\UserInterface::class,
            \App\Repositories\User\UserEloquentRepository::class
        );
       
        $this->app->bind(
            \App\Repositories\Contract\ContractInterface::class,
            \App\Repositories\Contract\ContractEloquentRepository::class
        );
       
        $this->app->bind(
            \App\Repositories\Contact\ContactInterface::class,
            \App\Repositories\Contact\ContactEloquentRepository::class
        );
    }
}
