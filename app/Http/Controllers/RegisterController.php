<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showRegisterForm(){
        return view('register');
    }

    function register(Request $request){
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($validasi);
        return redirect('/login');
    }
}
