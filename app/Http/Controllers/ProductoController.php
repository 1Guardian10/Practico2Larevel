<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $productos = Productos::with('usuario')->get();

        return view('productos.listar',compact('productos'));
    }

    public function crear(){

        $usuarios=Usuarios::where('activo',true)->get();

        return view('productos.insertar',compact('usuarios'));
    }

    public function editar($id){
        $producto = Productos::findOrFail($id);
        $usuarios=Usuarios::where('activo',true)->get();

        return view('productos.editar', compact('producto','usuarios'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required|min:3',
            'precio' => 'required|numeric|min:0',
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
            'id_usuario' => 'required|exists:usuarios,id',
        ]);

        Productos::create($request->all());

        return redirect()->route('productos.index');
    }

    public function update(Request $request, Productos $producto)
    {
        $request->validate([
            'nombre_producto' => 'required|min:3',
            'precio' => 'required|numeric|min:0',
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
            'id_usuario' => 'required|exists:usuarios,id',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    public function delete($id){
        Productos::where('id',$id)->delete();

        return redirect()->route('productos.index');
    }
}