<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::post('/jobs', 'store');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// Auth
Route::get('/register', [RegisteredController::class, 'create']);
Route::post('/register', [RegisteredController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [RegisteredController::class, 'store']);
