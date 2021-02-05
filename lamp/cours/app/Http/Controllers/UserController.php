<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers() {
        return view('users');
    }

    public function createUser() {
        return view('createUser');
    }

    public function updateUser() {
        //
    }
    public function deleteUser() {
        //
    }
}
