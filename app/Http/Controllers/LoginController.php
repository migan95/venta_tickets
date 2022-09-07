<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logged(Request $request){
        if(Auth::check()){
            return redirect()->intended('eventos');
        }else{
            return view('login');
        }
    }

    public function authenticate(Request $request){
        $credenciales = $request->only('email','password');
        $mensaje = "Credenciales incorrectas";
        if(Auth::attempt($credenciales)){
            return redirect()->intended('eventos');
        }else{
            return view('login',['mensaje'=>$mensaje]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return view('dashboard');
    }
}
