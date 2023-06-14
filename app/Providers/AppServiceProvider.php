<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        $cards = require app_path('../config/linksCards.php');
        $comicLinks = require app_path('../config/linksComics.php');
        $socials = require app_path('../config/linksSocials.php');
    
        View::share('cards', $cards);
        View::share('comicLinks', $comicLinks);
        View::share('socials', $socials);
    }
}
