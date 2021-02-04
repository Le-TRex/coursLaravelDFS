<?php

namespace App\Http\Controllers;

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
        return view('about');
    }
    
    /**
     * @return Application|Factory|View
     */
    public function Home(){
        return view('welcome');
    }
}