<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('fo_tools', 'fo_tools')
    ->middleware(['auth'])
    ->name('fo_tools');

Route::view('fo_tools_imbuing_recipe_entry', 'fo_tools_imbuing_recipe_entry')
    ->middleware(['auth'])
    ->name('fo_tools_imbuing_recipe_entry');

require __DIR__.'/auth.php';
