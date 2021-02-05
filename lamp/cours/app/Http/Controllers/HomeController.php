<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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
            return view('welcome');
    }
}