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

        $salut = 'Jean-Michel';
        return view('about', ["name" => $salut]);
        //Attention, la variable $salut devient le nom de la clé donc $name
        //dans la view about pour afficher la variable on interpolera $name
    }

    /**
     * @return Application|Factory|View
     */
    public function Home(){
        $todo = new Todo();
        $todo->name = "salut";
        $todo->description = "je suis une description";
        $todo->save();
        return view('welcome');
    }
}
