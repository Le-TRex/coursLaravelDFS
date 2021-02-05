<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function about(){
        $salut = "Régissss";
        return view('about', [ "nom" => $salut ]);
    }
    
    /**
     * @return Application|Factory|View
     */
    public function Home(){
        $todos = Todo::where('id',1)->first();
        $todos->name = "Régis";
        $todos->save();
        
        ddd($todos);
        
        return view('welcome');
    }
}