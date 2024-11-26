<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FleetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\SettingController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Fleet; // Contoh model Fleet
use App\Models\Service; // Contoh model Service
use App\Models\Blog; // Contoh model Blog

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/service/{slug}', [MainController::class, 'service'])->name('service.details');

Route::get('/fleet', [MainController::class, 'fleet'])->name('fleet');
Route::get('/fleet/{slug}', [MainController::class, 'detailFleet'])->name('fleet.details');

Route::get('/blog/{slug}', [MainController::class, 'blog'])->name('blog.details');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'storeContact'])->name('contact.store');

Route::get('/terms-and-conditions', [MainController::class, 'termsconditions'])->name('terms-conditions');

Route::get('/privacy-policy', [MainController::class, 'privacypolicy'])->name('privacy-policy');

Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();

    // Menambahkan halaman statis
    $sitemap->add(Url::create(route('home')));
    $sitemap->add(Url::create(route('about')));
    $sitemap->add(Url::create(route('fleet')));
    $sitemap->add(Url::create(route('contact')));

    // Menambahkan halaman dinamis untuk service
    $services = Service::all();
    foreach ($services as $service) {
        $sitemap->add(Url::create(route('service.details', ['slug' => $service->slug])));
    }

    // Menambahkan halaman dinamis untuk fleet
    $fleets = Fleet::all();
    foreach ($fleets as $fleet) {
        $sitemap->add(Url::create(route('fleet.details', ['slug' => $fleet->slug])));
    }

    // Menambahkan halaman dinamis untuk blog
    $blogs = Blog::all();
    foreach ($blogs as $blog) {
        $sitemap->add(Url::create(route('blog.details', ['slug' => $blog->slug])));
    }

    // Menyimpan file sitemap.xml di folder public
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated and saved to /public/sitemap.xml';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function (){

        Route::middleware('can:manage heroSections')->group(function () {
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
