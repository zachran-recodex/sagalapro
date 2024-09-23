<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/service/aircraft-helicopter-acquisition', [MainController::class, 'acquisition'])->name('acquisition');
Route::get('/service/aerial-fire-fighting-consultant-operation', [MainController::class, 'aerial'])->name('aerial');
Route::get('/service/heavy-outsized-cargo-service', [MainController::class, 'cargo'])->name('cargo');
Route::get('/service/private-jet-charters-flights', [MainController::class, 'charter'])->name('charter');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/fleet', [MainController::class, 'fleet'])->name('fleet');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
