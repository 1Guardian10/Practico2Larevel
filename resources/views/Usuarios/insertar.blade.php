@extends('Layouts.Plantilla')

@section('title', 'Crear usuario')
@section('header', 'Crear nuevo usuario')

@section('content')
    <div class="bg-white shadow rounded p-6 max-w-xl mx-auto">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="correo" class="block font-medium text-gray-700">Correo</label>
                <input type="email" name="correo" id="correo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="contrasena" class="block font-medium text-gray-700">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar
            </button>
        </form>
    </div>
@endsection
