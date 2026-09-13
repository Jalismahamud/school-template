<?php

namespace App\Providers;

use App\Models\SchoolSetting;
use App\Models\ContactMessage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('layouts.eduleb', function ($view): void {
            $view->with('schoolSettings', SchoolSetting::current());
        });

        View::composer('layouts.navigation', function ($view): void {
            $view->with('unreadMessageCount', ContactMessage::unread()->count());
        });
    }
}
