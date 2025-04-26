<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RecordService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RecordService::class, function () {
            return new RecordService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
