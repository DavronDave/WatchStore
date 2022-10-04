<?php

namespace App\Providers;

use App\Models\Basic\About;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['pages.*'], function ($view) {
            $about = About::getSiteData();
            $view->with('about', $about);
        });

        View::composer(['auth.*'], function ($view) {
            $about = About::getSiteData();
            $view->with('about', $about);
        });
    }
}
