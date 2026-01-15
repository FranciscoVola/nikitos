<footer class="mt-20 bg-orange-400 text-white">
  <div class="max-w-7xl mx-auto px-6 py-16">

    {{-- CONTENIDO PRINCIPAL --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 items-start">

      {{-- LOGO + REDES --}}
      <div>
        <img src="/img/logo-nikitos.png" alt="Nikitos" class="h-10">

        <div class="mt-6 flex items-center gap-4">
          <a href="#" aria-label="Facebook"
             class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 transition"></a>
          <a href="#" aria-label="Instagram"
             class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 transition"></a>
        </div>
      </div>

      {{-- SECCIONES --}}
      <div>
        <h4 class="font-semibold mb-4">Secciones</h4>
        <ul class="space-y-2 text-sm text-white/90">
          <li><a href="#hero" class="hover:underline">Home</a></li>
          <li><a href="#productos" class="hover:underline">Productos</a></li>
          <li><a href="#linea-productos" class="hover:underline">Dónde comprar</a></li>
          <li><a href="#recetas" class="hover:underline">Recetas</a></li>
          <li><a href="#nosotros" class="hover:underline">Nosotros</a></li>
          <li><a href="#contacto" class="hover:underline">Contacto</a></li>
        </ul>
      </div>

      {{-- NEWSLETTER --}}
      <div>
        <h4 class="font-semibold mb-4">Suscribite al Newsletter</h4>

        <form class="flex items-center bg-white rounded-full overflow-hidden">
          <input
            type="email"
            placeholder="Email"
            class="flex-1 px-4 py-2 text-sm text-gray-700 outline-none"
          >
          <button
            type="submit"
            class="px-4 py-2 bg-white text-orange-500 font-semibold hover:bg-gray-100 transition">
            →
          </button>
        </form>
      </div>

      {{-- CONTACTO --}}
      <div id="contacto">
        <h4 class="font-semibold mb-4">Contacto</h4>
        <ul class="space-y-2 text-sm text-white/90">
          <li class="flex gap-2 items-start">
            📍 Av. Otavio y Giolietti - Km 32 C.P.1761  
            Pontevedra, Merlo, Argentina
          </li>
          <li>📞 0220.492.4752</li>
          <li>✉️ ventas@nikitos.com.ar</li>
          <li>🕒 Lunes a Viernes 9.00 a 17.30hs</li>
        </ul>
      </div>

    </div>
  </div>

  {{-- FRANJA INFERIOR --}}
  <div class="bg-orange-500">
    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-2 text-sm text-white/90">
      <p>© Copyright {{ date('Y') }} Nikitos Snacks. Todos los derechos reservados</p>
      <p>By Osale</p>
    </div>
  </div>
</footer>
