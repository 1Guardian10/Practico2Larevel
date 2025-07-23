<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //funciones para cargar las vistas
    public function index(){
        $usuarios=Usuarios::All();
        return view('usuarios.listar',compact('usuarios'));
    }

    public function crear(){
        return view('usuarios.insertar');
    }

    public function editar($id){
        $usuario = Usuarios::findOrFail($id);

        return view('usuarios.editar', compact('usuario'));
    }

    //funciones para realizar las operaciones crud

    public function create(Request $request){
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contrasena' => 'required|string|min:6|max:255',
        ]);
        $usuario=$request->all();

        $usuario['activo']=true;

        Usuarios::create($usuario);

        return redirect()->route('usuarios.index');
    }

    public function update(Request $request, Usuarios $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'correo' => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'contrasena' => 'nullable|string|min:6|max:255',
            'activo' => 'nullable|boolean'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;

        if ($request->filled('contrasena')) {
            $usuario->contrasena = bcrypt($request->contrasena);
        }

        $usuario->activo = $request->has('activo');

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function delete($id)
    {
        Usuarios::where('id', $id)->delete();
        return redirect()->route('usuarios.index');
    }
}
