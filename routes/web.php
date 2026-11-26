<?php

use App\Http\Controllers\RessourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('ressources.index');
});

Route::get('/ressources', [RessourceController::class, 'index'])->name('ressources.index');
Route::get('/ressources/{id}', [RessourceController::class, 'show'])->name('ressources.show');
