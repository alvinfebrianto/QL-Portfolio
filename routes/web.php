<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function() {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('skills', App\Http\Controllers\SkillController::class);
    Route::resource('projects', App\Http\Controllers\ProjectController::class);
});

require __DIR__.'/auth.php';
