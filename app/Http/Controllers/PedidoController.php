<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){

        $pedidos = Pedidos::with('usuario')->get();

        return view('pedidos.listar',compact('pedidos'));
    }

    public function crear(){

        $usuarios=Usuarios::where('activo',true)->get();

        return view('pedidos.insertar',compact('usuarios'));
    }

    public function editar($id){
        $pedido = Pedidos::findOrFail($id);
        $usuarios=Usuarios::where('activo',true)->get();

        return view('pedidos.editar', compact('pedido','usuarios'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|min:3',
            'id_usuario' => 'required|exists:usuarios,id'
        ]);

        Pedidos::create($request->all());

        return redirect()->route('pedidos.index');
    }

    public function update(Request $request, Pedidos $pedido)
    {
        $request->validate([
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|min:3',
            'id_usuario' => 'required|exists:usuarios,id'
        ]);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index');
    }

    public function delete($id){
        Pedidos::where('id',$id)->delete();

        return redirect()->route('pedidos.index');
    }
}
