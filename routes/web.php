<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\demandecontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

// ...

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/agent', [AgentController::class, 'index'])->name('agent');


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
    


    Route::get('/agent/{numero_demande}/retour', [DemandeController::class,  'affichageR'])->name('form.cloture'); // Route pour afficher le formulaire
    Route::get('/agent/{numero_demande}/aller',  [DemandeController::class,  'affichageA'])->name('form.traiter'); // Route pour afficher le formulaire
  
    Route::post('/retour', [DemandeController::class, 'cloture'])->name('form.clotureDm');
    Route::post('/aller', [DemandeController::class, 'traitement'])->name('form.traiterDm');
    Route::post('/Demande', [DemandeController::class, 'store'])->name('form.submit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';