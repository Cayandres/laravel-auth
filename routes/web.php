<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Guest\PageController;



Route::get('/', [PageController::class, 'index'])->name('home');

Route::middleware(['auth','verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/',[DashbordController::class, 'index'])->name('home');
    });





require __DIR__.'/auth.php';
