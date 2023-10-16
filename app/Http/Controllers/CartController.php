<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\Produc;
use Cart;
class CartController extends Controller
{
    public function shop()
    {
        $produc= Produc::all();
        //dd($products);
        return view('shop')->with(['produc' => $produc]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();

        foreach ($cartCollection as $item) {
            $produc = Produc::find($item->id);
            $item->attributes->foto_producto = $produc->foto_producto;
        }
        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);
    }

    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto eliminado!');
    }

    public function add(Request$request){
        \Cart::add(array(
                'id' => $request->id,
                'nombre_producto' => $request->nombre_producto,
                'precio_venta' => $request->precio_venta,
                'attributes' => array(
                    'foto_producto' => $request->foto_producto,
                    'categoria_id' => $request->categoria_id
    )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto adquirido!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito vacio!');
    }

    public function checkout(){
        return view('checkout');
    }
    public function storeVenta(){
        // Accede al contenido del carrito
        $cartItems = Cart::getContent();

        // Crea una nueva venta
        $venta = new Venta();

        $venta->total = Cart::getTotal();

        // Guarda la venta en la base de datos
        $venta->save();

        // Asocia los productos del carrito con la venta
        foreach ($cartItems as $item) {
            $venta->produc()->attach($item->id, ['cantidad' => $item->quantity]);
        }
        \Cart::clear();

        // Redirige o muestra un mensaje de éxito al cliente
        return redirect()->back()->with('success_msg', 'La venta se ha registrado correctamente.');
    }
}
