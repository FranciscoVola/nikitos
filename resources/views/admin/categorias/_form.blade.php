@csrf

<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium mb-1">Nombre</label>
        <input type="text"
               name="nombre"
               value="{{ old('nombre', $categoria->nombre ?? '') }}"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
               required>
        @error('nombre')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Orden</label>
        <input type="number"
               name="orden"
               value="{{ old('orden', $categoria->orden ?? 0) }}"
               class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
        @error('orden')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox"
               name="activo"
               id="activo"
               value="1"
               class="rounded border-gray-300"
               {{ old('activo', ($categoria->activo ?? true)) ? 'checked' : '' }}>
        <label for="activo" class="text-sm">Activa</label>
    </div>
</div>
