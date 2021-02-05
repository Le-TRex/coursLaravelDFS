<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function Home(){
        $todos = Todo::all();
        return view('todos', ["todos"=> $todos]);
    }
    
    public function UpdateTodo($id){
        ddd($id);
        return view('UpdateTodo');
    }
}
