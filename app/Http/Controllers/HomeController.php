<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {   if ($request->user()->rol_usuario_id ==1)
    {
        return view('index');
    }
    elseif ($request->user()->rol_usuario_id ==2)
    {
        return redirect()->route('home2');
    }
    else
    {
        return view('home3');
    }
    }



}
