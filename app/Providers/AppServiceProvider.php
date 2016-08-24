<?php

namespace App\Providers;

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
        view()->composer('*', function($view) {
            // Instantiate new DOMDocument object
            $svg = new \DOMDocument();
            // Load SVG file from public folder
            $svg->load(public_path('images/logo.svg'));
            // Add CSS class (you can omit this line)
            $svg->documentElement->setAttribute("class", "logo");
            // Get XML without version element
            $star = $svg->saveXML($svg->documentElement);
            // Attach data to view
            $view->with('logo', $star);
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
