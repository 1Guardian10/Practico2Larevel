@extends('Layouts.Plantilla')

@section('title', 'Lista de usuarios')

@section('header', 'Usuarios registrados')

@section('content')
    <div class="mb-4">
        <a href="{{ route('usuarios.crear') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Crear nuevo usuario
        </a>
    </div>

    <div class="bg-white shadow rounded p-4">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Correo</th>
                    <th class="px-4 py-2 text-left">Activo</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $usuario->id }}</td>
                        <td class="px-4 py-2">{{ $usuario->nombre }}</td>
                        <td class="px-4 py-2">{{ $usuario->correo }}</td>
                        <td class="px-4 py-2">
                            @if ($usuario->activo)
                                <span class="text-green-600 font-semibold">Sí</span>
                            @else
                                <span class="text-red-600 font-semibold">No</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 text-center space-x-2">
                            <a href="{{ route('usuarios.editar', $usuario->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <a href="{{ route('usuarios.delete', $usuario->id) }}" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center text-gray-500">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
