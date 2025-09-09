<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\VideoGallery;
use App\Models\MediaCategory;

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
        // Explicit route model binding for VideoGallery
        Route::bind('videogallery', function ($value) {
            return VideoGallery::where('id', $value)->firstOrFail();
        });
    }
}
