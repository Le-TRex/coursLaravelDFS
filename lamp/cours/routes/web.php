<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
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


require "Groups/Todos.php";
require "Groups/Auth.php";


//Route::prefix('todos')->group(function(){
//    Route::get('/', [ TodoController::class, 'Home'])->name('homeTodos');
//    Route::get('/create', [TodoController::class, 'CreateTodo'])->name('CreateTodo');
//    Route::post('/create', [TodoController::class, 'CreateTodoPost'])->name('CreateTodoPost');
//    Route::get('/{todo:id}', [ TodoController::class, 'UpdateTodo' ])->name('TodoEdit');
//    Route::patch('/{todo:id}', [ TodoController::class, 'UpdateTodoPost' ])->name('UpdateTodo');
//    Route::delete('/{todo:id}', [TodoController::class, 'DeleteTodo'])->name('DeleteTodo');
//});

//Route::get('/todos', [ TodoController::class, 'Home'])->name('homeTodos');
//Route::get('/todos/create', [TodoController::class, 'CreateTodo'])->name('CreateTodo');
//Route::post('/todos/create', [TodoController::class, 'CreateTodoPost'])->name('CreateTodoPost');
//Route::get('/todos/{todo:id}', [ TodoController::class, 'UpdateTodo' ])->name('TodoEdit');
//Route::patch('/todos/{todo:id}', [ TodoController::class, 'UpdateTodoPost' ])->name('UpdateTodo');
//Route::delete('/todos/{todo:id}', [TodoController::class, 'DeleteTodo'])->name('DeleteTodo');

Route::get('/users', [UserController::class, 'showUsers'])->name('users');
Route::get('/users/create', [UserController::class, 'createUser'])->name('createUser');



