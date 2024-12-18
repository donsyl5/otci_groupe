<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();


          // Register Laravel's base cookies under the "required" cookies section:
      Cookies::essentials()
      ->session()
      ->csrf();

  // Register all Analytics cookies at once using one single shorthand method:
  // Cookies::analytics()
  //     ->google(env('GOOGLE_ANALYTICS_ID'));

  // Register custom cookies under the pre-existing "optional" category:
  Cookies::optional()
      ->name('darkmode_enabled')
      ->description('This cookie helps us remember your preferences regarding the interface\'s brightness.')
      ->duration(120)
      ->accepted(fn(Consent $consent, MyDarkmode $darkmode) => $consent->cookie(value: $darkmode->getDefaultValue()));
    }
}
