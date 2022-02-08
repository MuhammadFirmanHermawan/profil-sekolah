<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () { 
        return view('login.masuk', [
            'title' => 'Masuk',
            'active' =>'masuk',
        ]);
    }
    public function authenticate(Request $request){ 
        $credentials = $request->validate([
            'email' => ['required','email:dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)){ 
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email'=>'Email yang dimasukan salah',
            'password'=>'Password yang dimasukan salah',
        ]);
    }
    public function logout(){
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/landingpage');
    }
}
