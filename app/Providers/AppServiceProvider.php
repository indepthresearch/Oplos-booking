<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\Listing;
use App\Accomodation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('index',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('listings',listing::all());
        });

        view()->composer('rooms',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('listings',listing::all());
        });

        view()->composer('product',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('listings',listing::all());
        });

        view()->composer('deals',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('listings',listing::all());
        });

           view()->composer('book',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('listings',listing::all());
        });

             view()->composer('rooms',function($view){
            $accomodations = accomodation::all();
            $accomodations = array();
           $view->with('accomodations',accomodation::all());
        });

          view()->composer('product',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('book',listing::all());
        });

        view()->composer('cart',function($view){
            $accomodations = accomodation::all();
            $accomodations = array();
           $view->with('book',accomodation::all());
        });

        view()->composer('search',function($view){
            $listings = listing::all();
            $listings = array();
           $view->with('search',listing::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
