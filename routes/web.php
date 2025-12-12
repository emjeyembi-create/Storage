<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| Home / Portfolio
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $projects = Project::latest()->take(6)->get();
    return view('portfolio.Balatbat', compact('projects'));
})->name('home');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard (auth required)
|--------------------------------------------------------------------------
*/
Route::get('dashboard', function () {
    // show user's projects (for convenience)
    $projects = auth()->check() ? auth()->user()->projects()->latest()->get() : collect();
    return view('dashboard', compact('projects'));
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Projects CRUD
|--------------------------------------------------------------------------
*/
Route::resource('projects', ProjectController::class);
