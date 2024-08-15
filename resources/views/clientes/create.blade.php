@extends('layout')

@section('title', 'Agregar Cliente')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Agregar Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
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
            <input type="text" name="nombres" id="nombres" class="w-full border-2 rounded px-4 py-2" value="{{ old('nombres') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" name="email" id="email" class="w-full border-2 rounded px-4 py-2" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-gray-700">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="w-full border-2 rounded px-4 py-2" value="{{ old('direccion') }}" required>
        </div>

        <div class="mb-4">
            <label for="fono" class="block text-gray-700">Teléfono:</label>
            <input type="text" name="fono" id="fono" class="w-full border-2 rounded px-4 py-2" value="{{ old('fono') }}" required>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar</button>
    </form>
@endsection
