<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class proveedoresController extends Controller
{
    public function mostrarInicio(){
        return view ('inicio');
     }

     public function inicioProveedores() {
        $proveedores = Proveedores::all();
        return view('proveedores', compact('proveedores'));
    }

    public function agregarProveedores(){
        return view ('agregarProveedor');
    }

    public function guardarProveedores(Request $req) {

        $Proveedor = new Proveedores();

        $nombre = $req->input('nombre');
        $fechaRegistro = $req->input('fechaRegistro');
        $telefono = $req->input('telefono');
        $correo = $req->input('correo');

        $Proveedor->nombre = $nombre;
        $Proveedor->fechaRegistro = $fechaRegistro;
        $Proveedor->telefono = $telefono;
        $TipoAsiento->correo = $correo;
       

        $Proveedor->save();

        return redirect()->route('proveedores.inicio');
    }
}

