@extends('layout')

@section('title', 'Editar Cliente')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-4">
            <label for="nombres" class="block text-gray-700">Nombre:</label>
            <input type="text" name="nombres" id="nombres" value="{{ old('nombres', $cliente->nombres) }}" class="w-full border-2 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $cliente->email) }}" class="w-full border-2 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-gray-700">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $cliente->direccion) }}" class="w-full border-2 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="fono" class="block text-gray-700">Teléfono:</label>
            <input type="text" name="fono" id="fono" value="{{ old('fono', $cliente->fono) }}" class="w-full border-2 rounded px-4 py-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar</button>
    </form>
@endsection
