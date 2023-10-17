<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\Produc;

class CartController extends Controller
{
    public function shop()
    {
        $produc= Produc::all();
        return view('shop')->with(['produc' => $produc]);
    }

    public function cart(Request $request)  {
        \Cart::session($request->user()->id);
        $cartCollection =  \Cart::getContent();

        $total = 0;
        $subtotal = 0;

        foreach ($cartCollection as $item) {
            $subtotal = floatval($item->associatedModel->precio_venta) * $item->quantity;
            $total += $subtotal;
            $item->subtotal = $subtotal;

            $produc = Produc::find($item->id);
            $item->attributes->foto_producto = $produc->foto_producto;

        }

        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection, 'total'=>$total]);
    }

    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    public function remove(Request $request){
        \Cart::session($request->user()->id);
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto eliminado!');
    }

    public function add(Request $request){
        $Product = Produc::find($request->id);

        \Cart::session($request->user()->id)->add(array(
            'id' =>  $request->id,
            'name' =>  $request->nombre_producto,
            'price' =>  $request->precio_venta,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $Product

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::session($request->user()->id);
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto adquirido!');
    }
    public function clear(Request $request ){
        \Cart::session($request->user()->id);
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito vacio!');
    }

    public function checkout(){
        return view('checkout');
    }
    public function storeVenta(Request $request){
        // Accede al contenido del carrito
        \Cart::session($request->user()->id);
        $cartItems = \Cart::getContent();

        // Crea una nueva venta
        $venta = new Venta();

        $venta->total = \Cart::getTotal();

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
