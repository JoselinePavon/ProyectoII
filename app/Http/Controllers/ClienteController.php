<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\DetalleVenta;
use App\Models\Produc;
use App\Models\Venta;
use Illuminate\Http\Request;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente = new cliente();
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->all() +['users_id'=>$request->user()->id]+['fecha_venta'=>now()]+['descripcion'=>'Venta en linea'];


        $venta = Venta::create($data);

        \Cart::session($request->user()->id);
        $cartCollection =  \Cart::getContent();
        foreach ($cartCollection as $item) {
            DetalleVenta::create(['cantidad_producto'=>$item->quantity,'precio_producto'=>$item->associatedModel->precio_venta,'venta_id'=>$venta->id]);
        }
        \Cart::clear();
        return redirect()->route('shop')
            ->with('Ok', 'Enviado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        request()->validate(cliente::$rules);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id)->delete();

        return redirect()->route('clientes.index')
            ->with('Ok', 'Registro eliminado');
    }
}
