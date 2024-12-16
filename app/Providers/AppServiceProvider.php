<?php

namespace App\Providers;

use App\Services\AppConfigService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\SettingComposer;
use App\View\Layout\Admin;
use App\View\Layout\Auth;
use App\View\Section\BlogSection;
use App\View\Section\FaqSection;
use App\View\Section\PartnerSection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Daftarkan AppConfigService ke service container
        $this->app->singleton(AppConfigService::class, function () {
            return new AppConfigService();
        });

        // Daftarkan SettingComposer untuk semua view
        View::composer('*', SettingComposer::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user) {
            if ($user->hasRole('admin')) {
                return true;
            }
            // Fallback return value
            return null;
        });

        // Layout
        Blade::component('layout.admin', Admin::class);
        Blade::component('layout.auth', Auth::class);

        // Section
        Blade::component('section.blog-section', BlogSection::class);
        Blade::component('section.faq-section', FaqSection::class);
        Blade::component('section.partner-section', PartnerSection::class);
    }
}
