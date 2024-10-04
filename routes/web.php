<?php

use App\Http\Controllers\Dashboard\BlogsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EventsController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QustionController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [WelcomeController::class,'index'])->name('home');
Route::get('/events', [EventsController::class,'main'])->name('events.main');
Route::get('/blogs', [BlogsController::class,'main'])->name('blogs.main');
Route::get('/maps', [MapController::class,'index'])->name('map');
Route::get('/qustion', [QustionController::class,'index'])->name('qustion.index');

  //Users
Route::prefix('dashboard/users')->name('users.')->controller(UsersController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
//Events
Route::prefix('dashboard/events')->name('events.')->controller(EventsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/create', 'create')->name('create');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
