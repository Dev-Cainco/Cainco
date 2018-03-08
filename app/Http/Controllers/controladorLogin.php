<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    public function inicio()
    {
        return view('login.login');
    }
    public function logueo(Request $datos)
    {
        if(Auth::attempt(['email'=>$datos->email,'password'=>$datos->password]))
        {
            return redirect()->route('panel');
        }else
        {
            return redirect()->route('login-inicio');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-inicio');
    }
}
