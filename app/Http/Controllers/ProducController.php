<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\produc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $producs = produc::join('categoria', 'producs.categoria_id', '=', 'categoria.id')
            ->select('producs.*', 'categoria.descripcion')
            ->paginate(10);

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
        $produc = new produc();
        $categoria = categoria::pluck('descripcion', 'id');
        return view('produc.create', compact('produc', 'categoria'));
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
            'categoria_id' => 'required|exists:categoria,id',
        ]);
        if ($request->hasFile('foto_producto')) {
            $foto_producto = $request->file('foto_producto');
            $rutaFoto = $foto_producto->store('producs', 'public');

        }

        $produc = new produc();
        $produc->codigo_producto = $request->codigo_producto;
        $produc->nombre_producto = $request->nombre_producto;
        $produc->precio_venta = $request->precio_venta;
        $produc->marca = $request->marca;
        $produc->foto_producto = $rutaFoto ?? null; // Asignación de la ruta de la foto o null si no se cargó ninguna foto
        $produc->categoria_id = $request->categoria_id; // Asigna el valor de 'categoria_id' desde el formulario
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
        $produc = produc::join('categoria', 'producs.categoria_id', '=', 'categoria.id')
            ->select('producs.*', 'categoria.descripcion as categoria_descripcion')
            ->find($id);

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
        $produc = produc::find($id);
        $categoria = categoria::pluck('descripcion', 'id');
        return view('produc.edit', compact('produc' ,'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  produc $produc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produc $produc)
    {
        // Validar los campos del producto, puedes usar las reglas definidas en el modelo Produc.
        $request->validate(produc::$rules);

        // Verificar si se ha seleccionado una nueva categoría
        if ($request->has('categoria_id')) {
            // Actualizar el atributo 'categoria_id' en el modelo
            $produc->categoria_id = $request->input('categoria_id');
        }
        if ($request->hasFile('foto_producto')) {
            $foto_producto = $request->file('foto_producto');
            $rutaFoto = $foto_producto->store('producs', 'public');
            $produc->foto_producto = $rutaFoto ?? null;
        }

        // Guardar los cambios en la base de datos
        $produc->save();

        return redirect()->route('producs.index')
            ->with('success', 'Producto actualizado exitosamente');
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $produc = produc::find($id)->delete();

        return redirect()->route('producs.index')
            ->with('success', 'Producto eliminado exitosamente');
    }
}
