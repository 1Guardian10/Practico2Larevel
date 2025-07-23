@extends('Layouts.Plantilla')

@section('title', 'Crear producto')
@section('header', 'Crear nuevo producto')

@section('content')
    <div class="bg-white shadow rounded p-6 max-w-xl mx-auto">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre_producto" class="block font-medium text-gray-700">Nombre del producto</label>
                <input type="text" name="nombre_producto" id="nombre_producto" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="precio" class="block font-medium text-gray-700">Precio</label>
                <input type="number" name="precio" id="precio" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="cantidad" class="block font-medium text-gray-700">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
            </div>

            <div class="mb-4">
                <label for="id_usuario" class="block font-medium text-gray-700">Usuario propietario</label>
                <select name="id_usuario" id="id_usuario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar producto
            </button>
        </form>
    </div>
@endsection
