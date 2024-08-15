@extends('layout')

@section('title', 'Clientes')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Lista de Clientes</h1>

    <a href="{{ route('clientes.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">Agregar Cliente</a>

    <table class="min-w-full bg-white border rounded-lg">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4 border-b text-center">ID</th>
                <th class="py-2 px-4 border-b text-center">Nombre</th>
                <th class="py-2 px-4 border-b text-center">Email</th>
                <th class="py-2 px-4 border-b text-center">Dirección</th>
                <th class="py-2 px-4 border-b text-center">Teléfono</th>
                <th class="py-2 px-4 border-b text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td class="py-2 px-4 border-b text-center">{{ $cliente->id }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $cliente->nombres }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $cliente->email }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $cliente->direccion }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $cliente->fono }}</td>
                    <td class="py-2 px-4 border-b text-center flex justify-center space-x-2">
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
