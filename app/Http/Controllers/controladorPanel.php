<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPanel extends Controller
{
    public function inicio()
    {
        return view('panel.template');
    }
}
