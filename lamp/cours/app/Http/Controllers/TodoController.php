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


//    Cette fonction permet d'update un élément dans la table Todo. ATTENTION, les users peuvent accéder à l'update !
//    public function UpdateTodo($id){
//        $todo = Todo::where("id",$id)->first();
//        ddd($id);
//        return view('UpdateTodo');
//    }



    public function UpdateTodo(Todo $todo){
        return view('UpdateTodo', ["todo" => $todo]);
    }

    public function UpdateTodoPost(Request $request){
      ddd($request);

    }
}
