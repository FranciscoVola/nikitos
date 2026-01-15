    <!doctype html>
    <html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Nikitos</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    </head>

    <body class="bg-gray-50 text-gray-900">
    <div class="min-h-screen" x-data="{ open: false }">

        {{-- Topbar --}}
        <header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
            {{-- Botón mobile --}}
            <button
                type="button"
                class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl border border-gray-200 hover:bg-gray-50"
                @click="open = true"
                aria-label="Abrir menú"
            >
                ☰
            </button>

            <div class="leading-tight">
                <p class="text-sm text-gray-500">Panel</p>
                <h1 class="text-lg font-semibold">Nikitos Admin</h1>
            </div>
            </div>

            <div class="flex items-center gap-3">
            <a href="{{ route('home') }}"
                class="hidden sm:inline-flex px-5 py-2 rounded-full border border-orange-400 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                Volver al sitio
            </a>

            {{-- “Pill” usuario --}}
            @auth
                <div class="px-5 py-2 rounded-full border border-orange-400 text-orange-500 text-sm font-semibold bg-white">
                {{ auth()->user()->name ?? 'Admin' }}
                </div>
            @endauth
            </div>
        </div>
        </header>

        <div class="max-w-7xl mx-auto px-6 py-8 flex gap-8">

        {{-- Sidebar desktop --}}
        <aside class="hidden lg:block w-64 shrink-0">
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4">
            <div class="mb-4 px-2">
                <p class="text-xs text-gray-500">Navegación</p>
                <p class="text-sm font-semibold">Gestión</p>
            </div>

            <nav class="space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}"
                class="flex items-center justify-between px-4 py-3 rounded-xl border border-transparent hover:bg-gray-50 transition
                {{ request()->routeIs('admin.dashboard') ? 'bg-orange-50 border-orange-200 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Dashboard
                <span class="text-xs {{ request()->routeIs('home') ? 'text-orange-500' : 'text-gray-400' }}">→</span>
                </a>

                <a href="{{ route('admin.categorias.index') }}"
                class="flex items-center justify-between px-4 py-3 rounded-xl border border-transparent hover:bg-gray-50 transition
                {{ request()->routeIs('admin.categorias.*') ? 'bg-orange-50 border-orange-200 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Categorías
                <span class="text-xs {{ request()->routeIs('admin.categorias.*') ? 'text-orange-500' : 'text-gray-400' }}">→</span>
                </a>

                <a href="{{ route('admin.productos.index') }}"
                class="flex items-center justify-between px-4 py-3 rounded-xl border border-transparent hover:bg-gray-50 transition
                {{ request()->routeIs('admin.productos.*') ? 'bg-orange-50 border-orange-200 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Productos
                <span class="text-xs {{ request()->routeIs('admin.productos.*') ? 'text-orange-500' : 'text-gray-400' }}">→</span>
                </a>
            </nav>

            <div class="mt-6 pt-4 border-t border-gray-100">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="w-full bg-gray-900 hover:bg-gray-800 transition text-white px-5 py-2 rounded-full text-sm font-semibold"
                >
                    Cerrar sesión
                </button>
                </form>
            </div>
            </div>
        </aside>

        {{-- Sidebar mobile (drawer) --}}
        <div
            class="fixed inset-0 z-50 lg:hidden"
            x-show="open"
            x-transition.opacity
            style="display:none"
        >
            <div class="absolute inset-0 bg-black/40" @click="open=false"></div>

            <div
            class="absolute left-0 top-0 h-full w-[85%] max-w-xs bg-white border-r border-gray-100 shadow-xl p-4"
            x-show="open"
            x-transition
            >
            <div class="flex items-center justify-between mb-4">
                <div>
                <p class="text-xs text-gray-500">Panel</p>
                <p class="text-sm font-semibold">Nikitos Admin</p>
                </div>
                <button
                class="w-10 h-10 rounded-xl border border-gray-200 hover:bg-gray-50"
                @click="open=false"
                aria-label="Cerrar menú"
                >
                ✕
                </button>
            </div>

            <nav class="space-y-2 text-sm">
                <a href="{{ route('home') }}"
                class="block px-4 py-3 rounded-xl hover:bg-gray-50
                {{ request()->routeIs('home') ? 'bg-orange-50 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Dashboard
                </a>

                <a href="{{ route('admin.categorias.index') }}"
                class="block px-4 py-3 rounded-xl hover:bg-gray-50
                {{ request()->routeIs('admin.categorias.*') ? 'bg-orange-50 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Categorías
                </a>

                <a href="{{ route('admin.productos.index') }}"
                class="block px-4 py-3 rounded-xl hover:bg-gray-50
                {{ request()->routeIs('admin.productos.*') ? 'bg-orange-50 text-orange-600 font-semibold' : 'text-gray-700' }}">
                Productos
                </a>
            </nav>

            <div class="mt-6 pt-4 border-t border-gray-100">
                <a href="{{ route('home') }}"
                class="block text-center px-5 py-2 rounded-full border border-orange-400 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                Volver al sitio
                </a>

                <form action="{{ route('logout') }}" method="POST" class="mt-3">
                @csrf
                <button
                    type="submit"
                    class="w-full bg-gray-900 hover:bg-gray-800 transition text-white px-5 py-2 rounded-full text-sm font-semibold"
                >
                    Cerrar sesión
                </button>
                </form>
            </div>
            </div>
        </div>

        {{-- Main --}}
        <main class="flex-1">
            @yield('content')
        </main>

        </div>
    </div>
    </body>
    </html>
