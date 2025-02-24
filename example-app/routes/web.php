<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view('pages/about-me');
});

// PORTFOLIO ROUTES

Route::get('/', [PageController::class, 'home'])->name('home'); // Homepage
Route::get('/skills', [PageController::class, 'skills'])->name('skills'); // Skills page
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery'); // Gallery page