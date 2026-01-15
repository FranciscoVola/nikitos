    @extends('admin.layout')

    @section('content')
    <div class="max-w-6xl mx-auto px-6 py-10">

        {{-- Título + descripción --}}
        <h1 class="text-3xl font-semibold">Productos</h1>
        <p class="text-sm text-gray-500 mt-2">
            Administrá el catálogo de productos. Podés crear, editar o eliminar productos desde esta pantalla.
        </p>

        {{-- Botón Nuevo --}}
        <div class="mt-8 flex justify-end">
            <a href="{{ route('admin.productos.create') }}"
            class="bg-orange-400 hover:bg-orange-500 transition text-white px-10 py-3 rounded-full text-sm font-semibold">
                Nuevo producto
            </a>
        </div>

        @if(session('success'))
            <div class="mt-6 p-4 rounded-xl bg-green-50 text-green-700 border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        {{-- Card contenedora --}}
        <div class="bg-white rounded-2xl shadow border border-gray-100 p-6 mt-8">

            {{-- “Filtro” placeholder--}}
            <div class="flex items-center justify-between gap-4">
                <div class="text-sm text-gray-600">Filtrar por categoría:</div>
                <select class="rounded-lg border border-gray-200 px-4 py-2 text-sm">
                    <option>Todas</option>
                    @foreach($categorias ?? [] as $cat)
                        <option>{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <hr class="my-6">

            {{-- Tabla soft --}}
            <div class="overflow-hidden rounded-2xl border border-gray-100">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50 text-xs font-semibold text-gray-600">
                            <th class="px-4 py-3 text-left">Imagen</th>
                            <th class="px-4 py-3 text-left">Nombre</th>
                            <th class="px-4 py-3 text-left">Categoría</th>
                            <th class="px-4 py-3 text-left">Orden</th>
                            <th class="px-4 py-3 text-left">Estado</th>
                            <th class="px-4 py-3 text-right">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                    @forelse($productos as $producto)
                        <tr class="hover:bg-gray-50/60 transition">
                            <td class="px-4 py-4">
                                @if($producto->imagen)
                                    <img src="{{ asset('storage/' . $producto->imagen) }}"
                                        class="h-12 w-12 object-cover rounded-xl border border-gray-200"
                                        alt="img">
                                @else
                                    <div class="h-12 w-12 rounded-xl bg-gray-100 border border-gray-200 flex items-center justify-center">
                                        <span class="text-gray-400 text-[11px]">Sin</span>
                                    </div>
                                @endif
                            </td>

                            <td class="px-4 py-4 font-medium text-gray-800">
                                {{ $producto->nombre }}
                            </td>

                            <td class="px-4 py-4 text-gray-600">
                                {{ $producto->categoria?->nombre ?? '-' }}
                            </td>

                            <td class="px-4 py-4 text-gray-600">
                                {{ $producto->orden }}
                            </td>

                            <td class="px-4 py-4">
                                @if($producto->activo)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700 border border-green-200">
                                        Activo
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-50 text-gray-600 border border-gray-200">
                                        Inactivo
                                    </span>
                                @endif
                            </td>

                            <td class="px-4 py-4 text-right whitespace-nowrap">
                                <a href="{{ route('admin.productos.edit', $producto) }}"
                                class="px-6 py-2 rounded-full border border-orange-400 text-orange-500 text-xs font-semibold hover:bg-orange-50 transition inline-block">
                                    Editar
                                </a>

                                <form action="{{ route('admin.productos.destroy', $producto) }}"
                                    method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button"
                                            class="ml-2 px-6 py-2 rounded-full bg-orange-400 text-white text-xs font-semibold hover:bg-orange-500 transition"
                                            onclick="openDeleteModal({{ $producto->id }}, 'productos')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-10 text-gray-500" colspan="6">
                                No hay productos cargados.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{-- Modal eliminar reutilizable --}}
    <div id="deleteModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="bg-white rounded-2xl shadow-xl max-w-sm w-full p-6 border border-gray-100">
            <h2 class="text-lg font-semibold">Confirmar eliminación</h2>
            <p class="mt-2 text-sm text-gray-600">¿Seguro que querés eliminar este elemento?</p>

            <div class="mt-6 flex justify-end gap-2">
                <button onclick="closeDeleteModal()"
                        class="px-5 py-2 rounded-full border border-gray-300 hover:bg-gray-50 text-sm font-semibold">
                    Cancelar
                </button>

                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-5 py-2 rounded-full bg-red-500 text-white hover:bg-red-600 text-sm font-semibold">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endsection
