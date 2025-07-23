@extends('Layouts.Plantilla')

@section('title', 'Lista de productos')
@section('header', 'Productos registrados')

@section('content')
    <div class="mb-4">
        <a href="{{ route('productos.crear') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Crear nuevo producto
        </a>
    </div>

    <div class="bg-white shadow rounded p-4">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Precio</th>
                    <th class="px-4 py-2 text-left">Cantidad</th>
                    <th class="px-4 py-2 text-left">Usuario</th>
                    <th class="px-4 py-2 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $producto->id }}</td>
                        <td class="px-4 py-2">{{ $producto->nombre_producto }}</td>
                        <td class="px-4 py-2">{{ number_format($producto->precio, 2) }} Bs</td>
                        <td class="px-4 py-2">{{ $producto->cantidad }}</td>
                        <td class="px-4 py-2">{{ $producto->usuario->nombre ?? 'Sin asignar' }}</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('productos.editar', $producto->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <a href="{{ route('productos.delete', $producto->id) }}" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-2 text-center text-gray-500">No hay productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
