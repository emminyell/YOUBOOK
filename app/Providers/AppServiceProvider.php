<?php

namespace App\Providers;

use App\Models\Reservation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        paginator::useBootstrap();

        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {

            if(session()->has('user')) {
                $user = session('user');
                $reservationCount = Reservation::where('id_user', $user->id)
                                               ->count();
                $view->with('reservationCount', $reservationCount);
            }
        });
    }
    }
