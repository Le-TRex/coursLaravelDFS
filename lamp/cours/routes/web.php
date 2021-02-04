<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
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


Route::get('/',[ HomeController::class, 'Home' ])->name('home');

Route::get('/about', [ HomeController::class, 'about' ]);


Route::get('/profil',[ ProfilController::class, 'Profil' ]);

Route::post('/profil', [ ProfilController::class, 'PostProfil' ])->name('PostProfil');

