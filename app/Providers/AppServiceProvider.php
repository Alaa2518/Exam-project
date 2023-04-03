<?php

namespace App\Providers;

use App\Http\WayToInsertOptions\WayToInsertOptions;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(WayToInsertOptions::class,function(){
            $request = app(\Illuminate\Http\Request::class);
            return new WayToInsertOptions($request);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
