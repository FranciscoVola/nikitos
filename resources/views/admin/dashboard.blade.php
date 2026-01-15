  <!doctype html>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Admin - Nikitos</title>
  </head>

  <body class="bg-gray-50 text-gray-900">

    {{-- Header estilo sitio --}}
    <header class="bg-white border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-4">
          <h1 class="text-xl font-semibold">Nikitos</h1>
          <span class="text-sm text-gray-400">/ Admin</span>
        </div>

        <div class="flex items-center gap-3">
          <a href="{{ route('home') }}"
            class="px-5 py-2 rounded-full border border-orange-400 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
            Volver al sitio
          </a>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
              class="px-5 py-2 rounded-full bg-orange-400 text-white text-sm font-semibold hover:bg-orange-500 transition">
              Cerrar sesión
            </button>
          </form>
        </div>
      </div>
    </header>

    {{-- Hero tipo home --}}
    <section class="relative">
      <div class="h-48 md:h-56 bg-orange-300 flex items-center justify-center">
        <h2 class="text-white text-4xl md:text-5xl font-semibold drop-shadow">
          Panel de administración
        </h2>
      </div>
      <div class="-mt-6 h-10 bg-white rounded-t-4x1"></div>
    </section>

    {{-- Contenido --}}
    <main class="max-w-6xl mx-auto px-6 py-12">

      {{-- Bienvenida --}}
      <div class="bg-white rounded-2xl shadow border border-gray-100 p-8">
        <h3 class="text-2xl font-semibold">
          Bienvenido, {{ auth()->user()->name }}
        </h3>

        <p class="mt-3 text-gray-600 max-w-2xl">
          Desde este panel podés gestionar los productos y categorías del sitio.
          Usá los accesos rápidos para comenzar.
        </p>
      </div>

      {{-- Accesos rápidos --}}
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">

        <a href="{{ route('admin.productos.index') }}"
          class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:-translate-y-0.5 transition">
          <h4 class="text-lg font-semibold">Productos</h4>
          <p class="mt-2 text-sm text-gray-600">
            Administrar el catálogo de productos.
          </p>
          <span class="inline-block mt-4 text-sm font-semibold text-orange-500">
            Ir a productos →
          </span>
        </a>

        <a href="{{ route('admin.categorias.index') }}"
          class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:-translate-y-0.5 transition">
          <h4 class="text-lg font-semibold">Categorías</h4>
          <p class="mt-2 text-sm text-gray-600">
            Crear y organizar las categorías.
          </p>
          <span class="inline-block mt-4 text-sm font-semibold text-orange-500">
            Ir a categorías →
          </span>
        </a>

        <div
          class="bg-orange-50 rounded-2xl border border-orange-100 p-6 flex flex-col justify-between">
          <div>
            <h4 class="text-lg font-semibold text-orange-600">
              Panel Nikitos
            </h4>
            <p class="mt-2 text-sm text-orange-700">
              Gestión interna del sitio.
            </p>
          </div>
          <span class="mt-4 text-sm font-semibold text-orange-600">
            Área administrativa
          </span>
        </div>

      </div>
    </main>

  </body>
  </html>
