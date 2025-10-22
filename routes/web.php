<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CostumController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsClient;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comptes', [CostumController::class, 'afficherCompte'])->middleware('auth')->name('comptes.index');
Route::post('/comptes/{id}', [CostumController::class, 'activer_desactiver_compte'])->middleware('auth')->name('comptes.index_activer_desactiver');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/contacts/isep', [ContactController::class, 'isepVue'])->name('isep')->middleware(IsClient::class);
});

require __DIR__.'/auth.php';

Route::resource('contacts', ContactController::class)->middleware(IsAdmin::class);