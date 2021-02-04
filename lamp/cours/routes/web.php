<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[ HomeController::class, 'Home' ]);

Route::get('/about', [ HomeController::class, 'about' ]);

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'profile']);

Route::post('/profile', [\App\Http\Controllers\ProfileController::class, 'PostProfile'])->name('PostProfile');
