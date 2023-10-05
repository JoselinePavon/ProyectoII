<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    public function index()
    {
        $user = User::paginate()
        ->where('rol_usuario_id', '=', '2');
        return view('tecnico.readTechnical', compact('user'));

    }

    public function createTechnical()
    {
        return view('tecnico.createTechnical');
    }

    public function saveTechnical(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required|max:100',
            'rol_usuario_id' =>'required|max:100'
        ], [
            'name.required' => 'El campo usuario no debe estar vacio.',
            'nombre.required' => 'El campo nombre no debe estar vacio.',
            'apellido.required' => 'El campo apellido no debe estar vacio.',
            'password.required' => 'El campo contraseña no debe estar vacio.',
            'email.required' => 'El campo email no debe estar vacio.',
            'rol_usuario_id' => 'El campo rol no debe estar vacio.',
        ]);

        try {
            $user = User::create([
                'name' => $data['name'],
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'email' => $data['email'],
                'password' => $data['password'],
                'rol_usuario_id' => $data['rol_usuario_id'],

            ]);
        } catch (QueryException $queryException) {
            return redirect()->route('register')->with('warning', 'Ocurrio un error al registrar un tecnico. ');
        }

        return redirect('/read/tecnico')->with('success', "Tecnico registrado");
    }
}
