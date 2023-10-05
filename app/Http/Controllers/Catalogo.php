<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catalogo extends Controller
{
    public function index()
    {
        return view('cliente.catalogo');
    }
}
