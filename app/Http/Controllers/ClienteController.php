<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DetalleVenta;
use App\Models\produc;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

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

        $clientes = DB::table('venta')->select('venta.*')->get();

        $clientes->map(function ($item) {
            $detalles = DB::table('detalle_venta')->join('producs', 'detalle_venta.producs_id', '=', 'producs.id')->where('detalle_venta.venta_id', '=', $item->id)->select('detalle_venta.*', 'producs.*')->get();

            $cantidad = 0;
            $total = 0;
            $productos = "";

            foreach ($detalles as $detalle) {
                $cantidad += $detalle->cantidad_producto;
                $total += $detalle->cantidad_producto * $detalle->precio_producto;
                $productos .= $detalle->nombre_producto . ',';
            }
            $item->cantidad = $cantidad;
            $item->total = $total;
            $item->productos = trim($productos, ',');
        });

        return view('cliente.index', compact('clientes'))
            ->with('i',);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $cliente = null;
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all() + ['users_id' => $request->user()->id] + ['fecha_venta' => now()] + ['descripcion' => 'Venta en linea'];


        $venta = Venta::create($data);

        \Cart::session($request->user()->id);
        $cartCollection = \Cart::getContent();
        foreach ($cartCollection as $item) {
            DetalleVenta::create(['cantidad_producto' => $item->quantity, 'precio_producto' => $item->associatedModel->precio_venta, 'producs_id' => $item->associatedModel->id, 'venta_id' => $venta->id]);
        }
        \Cart::clear();

        return redirect()->route('shop')
            ->with('success', 'Pago realizado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
     * @param int $id
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
     * @param \Illuminate\Http\Request $request
     * @param cliente $cliente
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
        // Obtén el registro de venta
        $venta = Venta::find($id);

        // Elimina los registros relacionados en detalle_venta
        $venta->detallesVenta()->delete();

        // Elimina el registro de venta
        $venta->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Registro eliminado');


    }

    public function venta(Request $request)
    {
        // Obtén la fecha proporcionada por el usuario desde la solicitud
        $fecha_venta = $request->input('fecha'); // Cambié la variable a $fecha_venta
        if ($fecha_venta) {
            // Si se proporciona una fecha, consulta las ventas relacionadas con esa fecha
            $ventas = DB::table('venta')
                ->whereDate('fecha_venta', '=', $fecha_venta)
                ->select('venta.*')
                ->get();
        }
    $ventas = DB::table('venta')->select('venta.*')->get();

    $ventas->map(function ($item) use ($fecha_venta) {
        $detalles = DB::table('detalle_venta')
            ->join('producs', 'detalle_venta.producs_id', '=', 'producs.id')
            ->join('venta', 'detalle_venta.venta_id', '=', 'venta.id')
            ->where('detalle_venta.venta_id', $item->id)
            ->select('detalle_venta.precio_producto', 'producs.nombre_producto', 'venta.fecha_venta')
            ->get();

        $precio_producto = 0;
        $productos = "";

        foreach ($detalles as $detalle) {
            $precio_producto += $detalle->precio_producto; // Cambié a $detalle->total
            $productos .= $detalle->nombre_producto . ',';

        }

        $item->total = $precio_producto;
        $item->productos = trim($productos, ',');

        return $item;
    });

    return view('informes.informeVentas', compact('ventas', 'fecha_venta')); // No sobrescribe $fecha_venta
}

    public function destroyVenta($id)
    {
        // Obtén el registro de venta
        $venta = Venta::find($id);

        if (!$venta) {
            return redirect()->route('informe')->with('error', 'Venta no encontrada');
        }

        // Elimina los detalles de venta relacionados con la venta
        $venta->detallesVenta()->delete();

        // Ahora puedes eliminar la venta
        $venta->delete();

        // Redirige a la vista de informe con un mensaje de éxito
        return redirect()->route('informe')->with('success', 'Registro eliminado');
    }

}
