<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            '*', 'App\Http\ViewComposers\ProjectComposer'
        );
        View::composer(
            '*', 'App\Http\ViewComposers\NewsComposer'
        );
        View::composer(
            '*', 'App\Http\ViewComposers\LibraryComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
