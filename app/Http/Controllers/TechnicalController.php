<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicalController extends Controller
{

    public function index()
    {
        return view('tecnico.readTechnical');

    }

    public function createTechnical()
    {
            return view('tecnico.createTechnical');

    }
    public function saveTechnical(Request $request)
    {
            return redirect('/read/tecnico')->with('Guardado', "Tecnico registrado");

    }


}
