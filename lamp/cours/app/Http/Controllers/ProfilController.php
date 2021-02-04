<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function Profil(){
        return view('profil');
    }


    public function PostProfil(Request $request){
        $prenom = $request->prenom;
        $email = $request->email;
        return view('profil', [ "email" => $email, "prenom" => $prenom ] );

    }
}
