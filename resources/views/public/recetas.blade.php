    @extends('layouts.public')

    @section('title', 'Recetas')

    @section('content')
    <section class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-3xl md:text-4xl font-semibold text-center mb-8">Recetas</h1>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($recetas as $r)
        <a href="{{ route('recetas.detalle', $r['slug']) }}"
            class="group bg-white rounded-2xl shadow border border-gray-100 overflow-hidden hover:-translate-y-0.5 transition">
            <div class="aspect-16/10 bg-gray-100">
            <img src="{{ asset($r['img']) }}" alt="{{ $r['titulo'] }}" class="w-full h-full object-cover">
            </div>
            <div class="p-5">
            <p class="text-xs text-gray-500">{{ $r['tiempo'] }}</p>
            <h3 class="mt-1 text-lg font-semibold text-gray-900 group-hover:text-orange-600 transition">
                {{ $r['titulo'] }}
            </h3>
            <p class="mt-3 text-sm font-semibold text-orange-500">Ver receta →</p>
            </div>
        </a>
        @endforeach
    </div>
    </section>
    @endsection
