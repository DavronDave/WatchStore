<?php

namespace App\Providers;

use App\Models\Basic\About;
use App\Models\Basic\Lang;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\View;

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
        View::composer(['site.*'], function ($view) {
            $language = LaravelLocalization::getCurrentLocale();
            $languages = Lang::where('status', true)->get();
            $logo = About::all()->first();
            $logo = is_null($logo)?null:$logo->logo;
            $view
                ->with('languages',$languages->pluck('image','url')->toArray())
                ->with('languages_name',$languages->pluck('name','url')->toArray())
                ->with('logo',$logo);
        });
    }
}
