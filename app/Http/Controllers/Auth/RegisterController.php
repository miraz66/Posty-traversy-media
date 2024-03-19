<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function home() {
        return view('home.index');
    }
    public function register() {
        return view('auth.register');
    }
    public function store(Request $request) {
        $formField = $request->validate([
            'name' => 'required|max:250',
            'username' => 'required|max:250',
            'email' => 'required|email|max:250',
            'password' => 'required|confirmed',
        ]);

       

        //validation
        //store user
        //sing the user in
        //redirect
    }
    
    public function post() {
        return view('post.index');
    }
}
