@extends('Layouts.Plantilla')

@section('title', 'Editar pedido')
@section('header', 'Editar pedido')

@section('content')
    <div class="bg-white shadow rounded p-6 max-w-xl mx-auto">
        <form action="{{ route('pedidos.update', $pedido) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="fecha_pedido" class="block font-medium text-gray-700">Fecha del pedido</label>
                <input type="date" name="fecha_pedido" id="fecha_pedido" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('fecha_pedido', $pedido->fecha_pedido) }}" required>
            </div>

            <div class="mb-4">
                <label for="estado" class="block font-medium text-gray-700">Estado</label>
                <select name="estado" id="estado" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="pendiente" {{ $pedido->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="entregado" {{ $pedido->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
                    <option value="cancelado" {{ $pedido->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="id_usuario" class="block font-medium text-gray-700">Usuario</label>
                <select name="id_usuario" id="id_usuario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ $pedido->id_usuario == $usuario->id ? 'selected' : '' }}>
                            {{ $usuario->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Actualizar pedido
            </button>
        </form>
    </div>
@endsection
