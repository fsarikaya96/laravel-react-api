<?php

namespace App\Providers;

use App\Http\Repository\RepositoryIoCRegister;
use App\Http\Service\ServiceIoCRegister;
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
        RepositoryIoCRegister::register();
        ServiceIoCRegister::register();
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
