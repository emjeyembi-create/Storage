<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showRegister(){return view('authentication.register');}
    function register(Request $request)
    {
        $request->validate([
            'name'      =>'required|string|max:255',
            'email'     =>'required|email|max:100',
            'password'  =>'required|min:5',
        ]);

        User::create([
            'name' => $request->name,
            'emai' => $request->email,
            'password' =>$request->password,
        ]);
        return redirect()->route('login.form')->with('success','Registration Successful!');


    }
    function showlogin(){return view('authentication.login');}
    function login(request $request):
    {
        $credentials = $request->validate([
            'email'     =>'required|email',
            'password'  =>'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' -> 'invalid email/password!'
        ]);
    }
}
