@csrf

<div class="space-y-4">
    {{-- Categoría --}}
    <div>
        <label class="block text-sm font-medium mb-1">Categoría</label>
        <select name="categoria_id"
                class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
                required>
            <option value="">Seleccionar...</option>
            @foreach($categorias as $cat)
                <option value="{{ $cat->id }}"
                    @selected(old('categoria_id', $producto->categoria_id ?? '') == $cat->id)>
                    {{ $cat->nombre }}
                </option>
            @endforeach
        </select>
        @error('categoria_id')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Nombre --}}
    <div>
        <label class="block text-sm font-medium mb-1">Nombre</label>
        <input type="text"
               name="nombre"
               value="{{ old('nombre', $producto->nombre ?? '') }}"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
               required>
        @error('nombre')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Descripción --}}
    <div>
        <label class="block text-sm font-medium mb-1">Descripción</label>
        <textarea name="descripcion"
                  rows="4"
                  class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
        >{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
        @error('descripcion')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Precio --}}
    <div>
        <label class="block text-sm font-medium mb-1">Precio</label>
        <input type="number"
               step="0.01"
               min="0"
               name="precio"
               value="{{ old('precio', $producto->precio ?? '') }}"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
        @error('precio')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Orden --}}
    <div>
        <label class="block text-sm font-medium mb-1">Orden</label>
        <input type="number"
               name="orden"
               value="{{ old('orden', $producto->orden ?? 0) }}"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
        @error('orden')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Imagen --}}
    <div>
        <label class="block text-sm font-medium mb-1">Imagen</label>

        <input type="file"
               name="imagen"
               accept="image/png,image/jpeg,image/jpg,image/webp"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">

        @error('imagen')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror

        @if (!empty($producto?->imagen))
            <div class="mt-3">
                <p class="text-xs text-gray-500 mb-2">Imagen actual:</p>
                <img src="{{ asset('storage/' . $producto->imagen) }}"
                     alt="Imagen producto"
                     class="h-24 rounded border">
            </div>
        @endif
    </div>

    {{-- Activo --}}
    <div class="flex items-center gap-2">
        <input type="checkbox"
               name="activo"
               id="activo"
               value="1"
               class="rounded border-gray-300"
               {{ old('activo', ($producto->activo ?? true)) ? 'checked' : '' }}>
        <label for="activo" class="text-sm">Activo</label>
    </div>
</div>
