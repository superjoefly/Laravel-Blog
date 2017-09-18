<?php

namespace App\Providers;

use App\Billing\Stripe;

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
        view()->composer('layouts.archives', function ($view) {
            $view->with('archives', \App\Post::archives());
        });

        view()->composer('*', function ($view) {
            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });

        view()->composer('layouts.header', function ($view) {
            $view->with('quotes', \App\Quote::quotes());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
        // Die and Dump in routes/web.php
    }
}
