<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Servicio;
use Illuminate\Http\Request;

class EstadoController extends Controller
{

    public function toggle($id)
    {
        $servicio = Servicio::find($id ) ->update(['estados_id' => 2]);
        return redirect()->route('home2');
    }


}
