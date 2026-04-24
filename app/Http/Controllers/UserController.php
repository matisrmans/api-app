<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller{


    public function login(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

    }

    

}