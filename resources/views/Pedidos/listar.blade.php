@extends('Layouts.Plantilla')

@section('title', 'Lista de Pedidos')
@section('header', 'Pedidos registrados')

@section('content')
    <div class="mb-4">
        <a href="{{ route('pedidos.crear') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Crear nuevo pedido
        </a>
    </div>

    <div class="bg-white shadow rounded p-4">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Fecha</th>
                    <th class="px-4 py-2 text-left">Estado</th>
                    <th class="px-4 py-2 text-left">Usuario</th>
                    <th class="px-4 py-2 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pedidos as $pedido)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $pedido->id }}</td>
                        <td class="px-4 py-2">{{ $pedido->fecha_pedido }}</td>
                        <td class="px-4 py-2">{{ ucfirst($pedido->estado) }}</td>
                        <td class="px-4 py-2">{{ $pedido->usuario->nombre ?? 'Sin asignar' }}</td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('pedidos.editar', $pedido->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <a href="{{ route('pedidos.delete', $pedido->id) }}" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center text-gray-500">No hay pedidos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
