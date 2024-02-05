<?php

// use App\Http\Controllers\ProjectController;
// use App\Http\Controllers\SkillController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function() {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Route::resource('skills', SkillController::class);
    // Route::resource('projects', ProjectController::class);
    Route::resource('skills', App\Http\Controllers\SkillController::class);
    Route::resource('projects', App\Http\Controllers\ProjectController::class);
});

require __DIR__.'/auth.php';
