<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::orderBy('created_at', 'desc')->paginate(10);

        return view('servicio.index', compact('servicios'))
            ->with('i', (request()->input('page', 1) - 1) * $servicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio = new Servicio();
        return view('servicio.create', compact('servicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $colageno = $request->all()+['users_id'=>$request->user()->id];
        request()->validate(Servicio::$rules);

        $servicio = Servicio::create($colageno);

        return redirect()->route('home3')
            ->with('success', 'Servicio creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);

        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);

        return view('servicio.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicio $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        request()->validate(Servicio::$rules);

        $servicio->update($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id)->delete();

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio eliminado exitosamente');
    }
    public function asignar($id)
    {
        $servicio = Servicio::find($id);
        $tecnico= User::where("rol_usuario_id", '=' , '2')->get();

        return view('servicio.asignar', compact('servicio', 'tecnico'));
    }
    public function asignartecnico(Request $request, Servicio $servicio)
    {
        $servicio->update($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Tecnico asignado');
    }

}
