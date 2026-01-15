@extends('layouts.public')

@section('title', 'Nikitos')

@section('content')

  {{-- HERO --}}
  <section id="hero" class="mt-6">
    <div
      class="relative overflow-hidden rounded-3xl bg-black text-white"
      style="background-image:url('/img/hero-bg.jpg'); background-size:cover; background-position:center;"
    >
      <div class="px-6 py-20 md:py-24">
        <div class="max-w-xl">
          <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Nikitos Snacks
          </h1>

          <p class="mt-4 text-base md:text-lg text-gray-200">
            Nikitos se encuentra presente en el mercado local<br class="hidden sm:block">
            desde hace casi 40 años.
          </p>

          <div class="mt-8 flex flex-wrap gap-4">
            <a href="#"
               class="bg-white text-black px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
              Descargar catálogo
            </a>

            <a href="#productos"
               class="border border-white text-white px-6 py-3 rounded-full hover:bg-white hover:text-black transition">
              Ver productos
            </a>
          </div>
        </div>
      </div>

      {{-- Papas flotando --}}
      <img
        src="/img/hero-papas.png"
        alt=""
        class="absolute right-6 md:right-10 bottom-0 w-65 md:w-85 hidden lg:block pointer-events-none select-none"
      >
    </div>
  </section>

  {{-- NOSOTROS --}}
  <section id="nosotros" class="mt-14">
    <div class="bg-orange-400 text-white rounded-3xl overflow-hidden">
      <div class="px-6 py-14 md:py-16 grid md:grid-cols-2 gap-10 items-center">

        <div>
          <h2 class="text-3xl md:text-4xl font-bold">
            Nosotros
          </h2>

          <p class="mt-4 text-white/90 leading-relaxed">
            Nikitos se encuentra presente en el mercado local desde hace casi 40 años,
            consolidándose como una marca referente de snacks. Trabajamos con materias
            primas seleccionadas y procesos que garantizan calidad en cada producto.
          </p>

          <a href="#"
            class="inline-flex items-center justify-center mt-8 bg-white text-orange-500 px-6 py-3 rounded-full font-semibold hover:bg-white/90 transition">
            Más info
          </a>
        </div>

        <div class="flex justify-center md:justify-end">
          <img
            src="/img/nosotros-bowl.png"
            alt="Nikitos"
            class="w-72 md:w-96 drop-shadow-lg"
          >
        </div>

      </div>
    </div>
  </section>

  {{-- LÍNEA DE PRODUCTOS --}}
  <section id="linea-productos" class="mt-20">
    <div class="max-w-7xl mx-auto px-6">

      <div class="flex items-end justify-between mb-10">
        <h2 class="text-2xl md:text-3xl font-bold">
          Línea de productos
        </h2>

        <a href="#productos"
          class="hidden md:inline-block text-sm font-medium underline hover:opacity-80">
          Ver todas
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="rounded-2xl p-6 text-white text-center bg-pink-500">
          <img src="/img/categoria-1.png" class="mx-auto mb-4 h-28 object-contain">
          <p class="font-semibold">Tradicional Escolar</p>
          <a href="#productos" class="mt-2 inline-block text-sm underline opacity-90">
            Ver todos
          </a>
        </div>

        <div class="rounded-2xl p-6 text-white text-center bg-orange-400">
          <img src="/img/categoria-2.png" class="mx-auto mb-4 h-28 object-contain">
          <p class="font-semibold">Copetín</p>
          <a href="#productos" class="mt-2 inline-block text-sm underline opacity-90">
            Ver todos
          </a>
        </div>

        <div class="rounded-2xl p-6 text-white text-center bg-green-500">
          <img src="/img/categoria-3.png" class="mx-auto mb-4 h-28 object-contain">
          <p class="font-semibold">Premium</p>
          <a href="#productos" class="mt-2 inline-block text-sm underline opacity-90">
            Ver todos
          </a>
        </div>

        <div class="rounded-2xl p-6 text-white text-center bg-yellow-400">
          <img src="/img/categoria-4.png" class="mx-auto mb-4 h-28 object-contain">
          <p class="font-semibold">Sin TACC</p>
          <a href="#productos" class="mt-2 inline-block text-sm underline opacity-90">
            Ver todos
          </a>
        </div>

      </div>

    </div>
  </section>

  {{-- PRODUCTOS DESTACADOS --}}
  @isset($productos)
  <section id="productos" class="mt-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 py-16">

      <div class="flex items-end justify-between gap-4">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold">Productos destacados</h2>
          <p class="mt-2 text-sm text-gray-600">
            Descubrí nuestros productos más elegidos.
          </p>
        </div>
      </div>

      <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($productos as $producto)
          <article class="bg-white rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition">
            <div class="h-44 flex items-center justify-center">
              <img
                src="{{ $producto->imagen
                        ? asset('storage/' . $producto->imagen)
                        : asset('img/placeholder-producto.png') }}"
                alt="{{ $producto->nombre }}"
                class="max-h-44 object-contain"
              >
            </div>

            <p class="mt-4 text-[11px] uppercase tracking-wide text-gray-400">
              {{ $producto->categoria?->nombre ?? 'Sin categoría' }}
            </p>

            <h3 class="mt-1 font-semibold leading-snug">
              {{ $producto->nombre }}
            </h3>

            <a href="#"
              class="mt-3 inline-block text-sm font-medium underline hover:opacity-80">
              Ver producto
            </a>
          </article>
        @endforeach
      </div>

    </div>
  </section>
  @endisset

  {{-- RECETAS --}}
  <section id="recetas" class="mt-20">
    <div class="max-w-7xl mx-auto px-6">

      <div class="flex items-end justify-between gap-4">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold">Recetas</h2>
          <p class="mt-2 text-sm text-gray-600">
            Inspirate con ideas simples y ricas para compartir.
          </p>
        </div>
      </div>

      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">

        <article class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-md transition">
          <div class="aspect-4/3 bg-gray-100 overflow-hidden">
            <img src="/img/receta-1.jpg" class="w-full h-full object-cover">
          </div>
          <div class="p-6 text-center">
            <h3 class="font-semibold">Nachos de tacos en sartén</h3>
            <a href="#" class="mt-3 inline-block text-sm font-medium underline hover:opacity-80">
              Ver receta
            </a>
          </div>
        </article>

        <article class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-md transition">
          <div class="aspect-4/3 bg-gray-100 overflow-hidden">
            <img src="/img/receta-2.jpg" class="w-full h-full object-cover">
          </div>
          <div class="p-6 text-center">
            <h3 class="font-semibold">Bocaditos con dips</h3>
            <a href="#" class="mt-3 inline-block text-sm font-medium underline hover:opacity-80">
              Ver receta
            </a>
          </div>
        </article>

        <article class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-md transition">
          <div class="aspect-4/3 bg-gray-100 overflow-hidden">
            <img src="/img/receta-3.jpg" class="w-full h-full object-cover">
          </div>
          <div class="p-6 text-center">
            <h3 class="font-semibold">Tabla snack para compartir</h3>
            <a href="#" class="mt-3 inline-block text-sm font-medium underline hover:opacity-80">
              Ver receta
            </a>
          </div>
        </article>

      </div>

    </div>
  </section>

@endsection
