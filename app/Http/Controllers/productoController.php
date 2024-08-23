<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class productoController extends Controller
{
    public function mostrarInicio(){
        return view ('inicio');
     }

     public function inicioProductos() {
        $productos = Producto::all();
        return view('producto', compact('productos'));
    }

    public function agregarProductos(){
        return view ('agregarProducto');
    }

    public function guardarProductos(Request $req) {

        $Producto = new producto();

        $descripcion = $req->input('descripcion');
        $precio = $req->input('precio');
        $stock = $req->input('stock');
        $pagaIsv = $req ->input('pagaIsv');

        $Producto->descripcion = $descripcion;
        $Producto->precio = $precio;
        $Producto->stock = $stock;
        $Producto->pagaIsv = $pagaIsv;

        $Producto->save();

        return redirect()->route('tipos.asientos.inicio');
    }
}
