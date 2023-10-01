<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $producto = ProductoModel::all();
        return view('productos.readProduct', compact ('producto'));
    }


// crear producto
    public function createProduct()
    {
        $producto = ProductoModel::all();
        return view('productos.createProduct', compact('producto'));
    }

    // Guardar producto
    public function save(Request $request)
    {
        $producto = $this->validate($request, [
            "codigo_producto" => "required|int",
            "nombre_producto" => "required|string|max:255",
            "precio_venta" => "required|int",
            "marca" => "required|string|max:255",
            "foto_producto" => "required",
            "categoria" => "required|string|max:255",

        ],
            [
                'codigo_producto.required' => 'El campo codigo no debe estar vacio.',
                'nombre_producto.required' => 'El campo nombre no debe estar vacio.',
                'precio_venta.required' => 'El campo precio no debe estar vacio.',
                'marca.required' => 'La marca no debe estar vacio.',
                'foto_producto.required' => 'El campo foto no debe estar vacio.',
                'categoria.required' => 'El campo categoria no debe estar vacio.',
            ]);

        if ($request->hasFile('foto_producto')) {
            $foto_producto= $request->file('foto_producto');
            $rutaFoto = $foto_producto->store('producto', 'public');
        }

        $producto = new ProductoModel();
        $producto->codigo_producto = $request->codigo_producto;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->precio_venta = $request->precio_venta;
        $producto->marca = $request->marca;
        $producto->foto_producto= $rutaFoto ?? null; // Asignación de la ruta de la foto o null si no se cargó ninguna foto
        $producto->categoria= $request->categoria;


        $producto = ProductoModel::create([
            'codigo_producto' => $producto['codigo_producto'],
            'nombre_producto' => $producto['nombre_producto'],
            'precio_venta' => $producto['precio_venta'],
            'marca' => $producto['marca'],
            'foto_producto' => $producto['foto_producto'],
            'categoria' => $producto['categoria'],

        ]);
        return redirect('/productos/read')->with('Guardado', "Producto Registrado");
    }
}
