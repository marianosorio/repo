<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class empleadoController extends Controller
{
    public function mostrarInicio(){
        return view ('inicio');
     }

     public function inicioEmpleado() {
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }

    public function agregarEmpleados(){
        return view ('agregarEmpleado');
    }

    public function guardarEmpleados(Request $req) {

        $Empleados = new Empleado();

        $nombre = $req->input('nombre');
        $apellido = $req->input('apellido');
        $fechaIngreso = $req->input('fechaIngreso');
        $salario = $req->input('salario');

        $Empleados->nombre = $nombre;
        $Empleados->apellido = $apellido;
        $Empleados->fechaIngreso = $fechaIngreso;
        $Empleados->salario = $salario;

        $Empleados->save();

        return redirect()->route('empleados.inicio');
    }
}
