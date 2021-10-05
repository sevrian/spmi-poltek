<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('isAsesor', function ($user) {
            return $user->role == 'asesor';
        });

        Gate::define('isAutor', function ($user) {
            return $user->role == 'autor';
        });
    }
}
