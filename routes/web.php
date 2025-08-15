<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard',[HomeController::class,'index'])->
middleware(['auth','admin']);

Route::get('/index', function () {
    return view('home.index'); 
});

Route::get('/categories', function () {
    return view('home.categories'); 
});
Route::get('/deals', function () {
    return view('home.deals'); 
});

Route::get('/about', function () {
    return view('home.about'); 
});


Route::get('/vegetable', function () {
    return view('home.vegetable'); 
});

Route::get('/dairy', function () {
    return view('home.dairy'); 
});

Route::get('/seafood', function () {
    return view('home.seafood'); 
});


Route::get('/bakery', function () {
    return view('home.bakery'); 
});

Route::get('/beverages', function () {
    return view('home.beverages'); 
});

Route::get('/snacks', function () {
    return view('home.snacks'); 
});