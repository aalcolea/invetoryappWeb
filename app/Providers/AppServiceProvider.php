<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //setlocale(LC_TIME, 'es_ES.UTF-8');
        date_default_timezone_set('America/Mexico_City');
        Carbon::setLocale('es');
        \Carbon\Carbon::setLocale('es');
    }
}
