<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        View::composer(array('carritos.index'), function($view){

            $currentUser = \Illuminate\Support\Facades\Auth::user();

            if(!empty($currentUser)){
                $view->with('eventos', $currentUser->eventos());
            }
        });
    }
}
