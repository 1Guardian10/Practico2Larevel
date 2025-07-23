@extends('layouts.plantilla')

@section('title', 'Editar usuario')
@section('header', 'Editar usuario')

@section('content')
    <div class="bg-white shadow rounded p-6 max-w-xl mx-auto">
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('nombre', $usuario->nombre) }}" required>
            </div>

            <div class="mb-4">
                <label for="correo" class="block font-medium text-gray-700">Correo</label>
                <input type="email" name="correo" id="correo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('correo', $usuario->correo) }}" required>
            </div>

            <div class="mb-4">
                <label for="contrasena" class="block font-medium text-gray-700">Nueva contraseña (opcional)</label>
                <input type="password" name="contrasena" id="contrasena" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="activo" value="1" class="form-checkbox"
                        {{ old('activo', $usuario->activo) ? 'checked' : '' }}>
                    <span class="ml-2">Usuario activo</span>
                </label>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Actualizar
            </button>
        </form>
    </div>
@endsection
