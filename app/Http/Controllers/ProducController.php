<?php

namespace App\Http\Controllers;

use App\Models\Produc;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

/**
 * Class ProducController
 * @package App\Http\Controllers
 */
class ProducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producs = Produc::paginate();

        return view('produc.index', compact('producs'))
            ->with('i', (request()->input('page', 1) - 1) * $producs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produc = new Produc();
        return view('produc.create', compact('produc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_producto' => 'required',
            'nombre_producto' => 'required',
            'precio_venta' => 'required',
            'marca' => 'required',
            'foto_producto' => 'required',
            'categoria' => 'required',
        ]);
        if ($request->hasFile('foto_producto')) {
            $foto_producto = $request->file('foto_producto');
            $rutaFoto = $foto_producto->store('producs', 'public');
        }

        $produc = new Produc();
        $produc->codigo_producto = $request->codigo_producto;
        $produc->nombre_producto = $request->nombre_producto;
        $produc->precio_venta = $request->precio_venta;
        $produc->marca = $request->marca;
        $produc->foto_producto = $rutaFoto ?? null; // Asignación de la ruta de la foto o null si no se cargó ninguna foto
        $produc->categoria = $request->categoria;
        $produc->save();


        return redirect()->route('producs.index')
            ->with('success', 'Producto creado exitosamente.');

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produc = Produc::find($id);

        return view('produc.show', compact('produc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produc = Produc::find($id);

        return view('produc.edit', compact('produc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Produc $produc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produc $produc)
    {
        request()->validate(Produc::$rules);

        $produc->update($request->all());

        return redirect()->route('producs.index')
            ->with('success', 'Produc updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $produc = Produc::find($id)->delete();

        return redirect()->route('producs.index')
            ->with('success', 'Produc deleted successfully');
    }
}
