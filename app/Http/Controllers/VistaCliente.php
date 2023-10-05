<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaCliente extends Controller
{
    public function index()
    {
        return view('home3');
    }
}
