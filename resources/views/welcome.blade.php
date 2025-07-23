@extends('layouts.plantilla')

@section('title', 'Inicio')
@section('header', 'Bienvenido al sistema')

@section('content')
    <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-2">
        <a href="{{ route('usuarios.index') }}" class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-200">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">📋 Listar Usuarios</h2>
            <p class="text-gray-600">Ver todos los usuarios registrados, editar o eliminar cuentas existentes.</p>
        </a>

    </div>
    
    <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-2">
        <a href="{{ route('productos.index') }}" class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-200">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">📋 Listar productos</h2>
            <p class="text-gray-600">Ver todos los productos registrados, editar o eliminar existencias.</p>
        </a>

    </div>

     <div class="max-w-4xl mx-auto grid gap-6 md:grid-cols-2">
        <a href="{{ route('pedidos.index') }}" class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition border border-gray-200">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">📋 Listar pedidos</h2>
            <p class="text-gray-600">Ver todos los pedidos registrados, editar o eliminar pedidos.</p>
        </a>

    </div>
@endsection
