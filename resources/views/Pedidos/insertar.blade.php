@extends('Layouts.Plantilla')

@section('title', 'Crear pedido')
@section('header', 'Crear nuevo pedido')

@section('content')
    <div class="bg-white shadow rounded p-6 max-w-xl mx-auto">
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="fecha_pedido" class="block font-medium text-gray-700">Fecha del pedido</label>
                <input type="date" name="fecha_pedido" id="fecha_pedido" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" 
                required value="{{ date('Y-m-d') }}">
            </div>

            <div class="mb-4">
                <label for="estado" class="block font-medium text-gray-700">Estado</label>
                <select name="estado" id="estado" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="entregado">Entregado</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="id_usuario" class="block font-medium text-gray-700">Usuario</label>
                <select name="id_usuario" id="id_usuario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar pedido
            </button>
        </form>
    </div>
@endsection
