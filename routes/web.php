<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// ...

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/agent', function () {
    return view('agent');
})->name('agent');


Route::get('/aller', function () {
    return view('aller');
})->name('aller');


Route::get('/retour', function () {
    return view('retour');
})->name('retour');

Route::get('/etatdemande', function () {
    return view('etatdemande');
})->name('etatdemande');

Route::middleware(['auth', 'verified'])->group(function () {
    
  


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';