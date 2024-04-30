<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function ver(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function crear(){
        return view('productoCrear');
    }

    public function guardar(Request $request){
        $producto = new Producto();

        $producto->identity = $request->input('id');
        $producto->descripcion = $request->input('descripcion');
        $producto->stock = $request->input('stock');
        $producto->precio = $request->input('precio');
        $producto->pagaIsv = $request->input('paga');
        
        $producto->save();

        return redirect()->route('productos.ver');
    }
}

