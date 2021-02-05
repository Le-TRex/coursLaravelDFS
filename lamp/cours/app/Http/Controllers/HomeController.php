<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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


//        afficher les entrées de la table todos dont l'id = 1
//        $todos = Todo::where('id', 1)->get();
//        afficher la 1ère entrée de la table todos dont l'id = 1
//        $todos = Todo::where('id', 1)->first();
//        afficher un array contenant les entrées de la table todos donc l'id =1 et le name = salut
//        $todos = Todo::where([
//            ['id','>', 1],
//            ['name', '=', 'salut']
//        ])->get();
//        modifier l'entrée dans la table todos donc l'id = 1, on change le name en Toto
//        $todos = Todo::where('id', 1)->first();
//        $todos->name = 'Toto';
//        $todos->save();
//        ddd($todos);
//        $todo = new Todo();
//        $todo->name = "salut";
//        $todo->description = "je suis une description";
//        $todo->save();


        return view('welcome');

    }
}
