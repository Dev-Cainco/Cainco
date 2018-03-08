<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    public function inicio()
    {
        return view('login.login');
    }
}
