<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function ver(){
        $proveedores = Proveedores::all();
        return view('proveedor', compact('proveedores'));
    }

    public function crear(){
        return view('proveedorCrear');
    }

    public function guardar(Request $request){
        $proveedores = new Proveedores;

        $proveedores->proveedor = $request->input('id');
        $proveedores->nombre = $request->input('nombre');
        $proveedores->fechaRegistro = $request->input('fecha');
        $proveedores->telefono = $request->input('telefono');
        $proveedores->correo = $request->input('correo');
        $proveedores->save();

        return redirect()->route('proveedor.ver');
    }
}
