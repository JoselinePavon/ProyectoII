<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index(Request $request)
    {

         $servicios= Servicio::where("users_id", '=' ,$request->user()->id)->paginate();

        return view('home2', compact('servicios'))
            ->with('i', (request()->input('page', 1) - 1) * $servicios->perPage());
    }

}
