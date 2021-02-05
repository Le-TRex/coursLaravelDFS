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
    
    public function UpdateTodo(Todo $todo){
        return view('UpdateTodo', ["todo" => $todo]);
    }
    
    public function UpdateTodoPost(Request $request, Todo $todo){
      $todo->name = $request->name;
      $todo->description = $request->description;
      $todo->save();
      
      return back()->with('success','Todo a été actualisée');
    }
    
    public function DeleteTodo(Todo $todo){
        $todo->delete();
        return back()->with('warning','Todo à été Delete');
    }
    
    public function CreateTodo(){
        return view('CreateTodos');
    }
    
    public function CreateTodoPost(Request $request){
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->save();
        return redirect('todos')->with('warning','Todo à été Ajouté');
    }
    
    
}
