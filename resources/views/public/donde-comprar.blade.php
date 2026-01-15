    @extends('layouts.public')

    @section('title', 'Dónde comprar')

    @section('content')
    <section class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-3xl md:text-4xl font-semibold text-center mb-8">Dónde comprar</h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($puntos as $p)
        <div class="bg-white rounded-2xl shadow p-6 border border-gray-100">
            <h3 class="text-lg font-semibold text-gray-900">{{ $p['nombre'] }}</h3>
            <p class="text-sm text-gray-600 mt-2">{{ $p['direccion'] }}</p>
            <p class="text-sm text-gray-600">{{ $p['zona'] }}</p>
            <p class="text-sm text-gray-600 mt-2">{{ $p['tel'] }}</p>

            <a href="#"
            class="inline-flex mt-4 text-sm font-semibold text-orange-500 hover:text-orange-600">
            Ver en mapa →
            </a>
        </div>
        @endforeach
    </div>

    <div class="mt-10 bg-orange-50 border border-orange-100 rounded-2xl p-6">
        <p class="text-sm text-gray-700">
        ¿Querés ser distribuidor? Escribinos desde <a class="underline font-semibold" href="{{ route('contacto') }}">Contacto</a>.
        </p>
    </div>
    </section>
    @endsection
