<header class="mt-6">
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-white rounded-full px-6 py-3 flex items-center justify-between shadow-sm">

      {{-- Logo --}}
      <a href="{{ route('home') }}" class="flex items-center gap-3 hover:opacity-80">
        <img src="/img/logo-nikitos.png" alt="Nikitos" class="h-8">
      </a>

      {{-- Nav --}}
      <nav class="hidden lg:flex items-center gap-6 text-sm font-medium text-gray-800">
        <a href="{{ route('home') }}" class="hover:text-orange-500">Home</a>
        <a href="{{ route('productos') }}" class="hover:text-orange-500">Productos</a>
        <a href="#donde-comprar" class="hover:text-orange-500">Donde comprar</a>
        <a href="#recetas" class="hover:text-orange-500">Recetas</a>
        <a href="#nosotros" class="hover:text-orange-500">Nosotros</a>
        <a href="#contacto" class="hover:text-orange-500">Contacto</a>
      </nav>

      {{-- Botón --}}
      @auth
        <a href="{{ route('admin.productos.index') }}"
          class="bg-orange-400 hover:bg-orange-500 transition text-white px-5 py-2 rounded-full text-sm font-semibold">
          Admin
        </a>
      @else
        <button
          type="button"
          class="bg-orange-400 hover:bg-orange-500 transition text-white px-5 py-2 rounded-full text-sm font-semibold"
          onclick="window.dispatchEvent(new CustomEvent('open-login-modal'));"
        >
          Ingresar
        </button>
      @endauth


    </div>
  </div>
</header>
