<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Http\RedirectResposen;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username'=> 'required',
            'password' => 'required' 
        ]);
        

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/admin');
    }

    return back()->with('loginError', 'Login gagal');
    }
}
