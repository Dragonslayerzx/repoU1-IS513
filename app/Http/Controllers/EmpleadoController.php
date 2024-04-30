<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function ver(){
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }

    public function crear(){
        return view('empleadoCrear');
    }

    public function guardar(Request $request){
        $empleados = new Empleado;

        $empleados->prestamo = $request->input('id');
        $empleados->nombre = $request->input('nombre');
        $empleados->apellido = $request->input('apellido');
        $empleados->fechaIngreso = $request->input('fecha');
        $empleados->salario = $request->input('salario');
        $empleados->save();

        return redirect()->route('empleado.ver');
    }
}

