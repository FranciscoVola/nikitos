@extends('layouts.public')

@section('title', 'Productos')

@section('content')
{{-- HERO --}}
<section class="relative">

  <div class="h-56 md:h-72 bg-gray-300 flex items-center justify-center">
    <h1 class="text-white text-4xl md:text-5xl font-semibold drop-shadow">Productos</h1>
  </div>


  <div class="-mt-6 h-10 bg-white rounded-t-4x1"></div>
</section>

{{-- GRID CATEGORIAS --}}
<section class="max-w-6xl mx-auto px-6 pb-16">
  @php

    $categorias = [
      'Tradicional Escolar',
      'Juvenil Metalizada',
      'Linea Max',
      'Premium Max 120g',
      'Premium Max 100g',
      'Fraccionada Cristal',
      'Familiar Tradicional',
      'Familiar Cristal',
      'Granel/Suelta',
      'Combo Snacks Nikitos',
      'Jugos',
    ];

    $colores = [
      'bg-pink-500', 'bg-rose-400', 'bg-fuchsia-400', 'bg-emerald-500',
      'bg-amber-400', 'bg-violet-400', 'bg-pink-300', 'bg-teal-400',
      'bg-yellow-400', 'bg-cyan-600', 'bg-red-500'
    ];
  @endphp

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($categorias as $i => $cat)
      <a href="#"
         class="rounded-2xl p-6 min-h-47.5 flex flex-col justify-between shadow overflow-hidden {{ $colores[$i % count($colores)] }}">
        <div class="flex justify-center pt-2">
          <div class="w-40 h-24 bg-white/25 rounded-xl"></div>
        </div>

        <div class="pt-4 text-center">
          <h3 class="text-white text-lg font-semibold drop-shadow">{{ $cat }}</h3>
          <p class="text-white/90 text-sm mt-2">Ver todos</p>
        </div>
      </a>
    @endforeach
  </div>
</section>
@endsection
