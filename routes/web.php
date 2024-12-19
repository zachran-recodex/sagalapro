<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FleetController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/service/{slug}', [MainController::class, 'service'])->name('service.details');

Route::get('/fleet', [MainController::class, 'fleet'])->name('fleet');
Route::get('/fleet/{slug}', [MainController::class, 'detailFleet'])->name('fleet.details');

Route::get('/blog/{slug}', [MainController::class, 'blog'])->name('blog.details');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'storeContact'])->name('contact.store');

Route::get('/terms-and-conditions', [MainController::class, 'termsConditions'])->name('terms-conditions');

Route::get('/privacy-policy', [MainController::class, 'privacyPolicy'])->name('privacy-policy');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function (){

        Route::resource('/dashboard', DashboardController::class);

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::middleware('can:manage hero sections')->group(function () {
            Route::resource('hero-sections', HeroSectionController::class);
        });

        Route::middleware('can:manage services')->group(function () {
            Route::resource('services', ServiceController::class);
        });

        Route::middleware('can:manage fleets')->group(function () {
            Route::resource('fleets', FleetController::class);
        });

        Route::middleware('can:manage partners')->group(function () {
            Route::resource('partners', PartnerController::class);
        });

        Route::middleware('can:manage blogs')->group(function () {
            Route::resource('blogs', BlogController::class);
        });

        Route::middleware('can:manage faqs')->group(function () {
            Route::resource('faqs', FaqController::class);
        });

        Route::middleware('can:manage contacts')->group(function () {
            Route::resource('contacts', ContactController::class);
        });

        Route::middleware('can:manage settings')->group(function () {
            Route::resource('settings', SettingController::class);
        });
    });

});

require __DIR__.'/auth.php';
