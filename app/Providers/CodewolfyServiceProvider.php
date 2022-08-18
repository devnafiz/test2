<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Codewolfy\Codewolfy;

class CodewolfyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('codewolfy',function(){

             return new Codewolfy();
        });
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
