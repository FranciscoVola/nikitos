@extends('admin.layout')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Nuevo producto</h1>
    <a href="{{ route('admin.productos.index') }}" class="text-sm text-gray-600 hover:underline">
        Volver
    </a>
</div>

@if ($errors->any())
  <div class="mb-4 p-3 rounded bg-red-50 text-red-700 text-sm">
    <ul class="list-disc pl-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="bg-white shadow rounded p-6">
    <form method="POST"
          action="{{ route('admin.productos.store') }}"
          enctype="multipart/form-data"
          class="space-y-6">

        @include('admin.productos._form')

        <div class="flex gap-2">
            <button class="px-4 py-2 rounded bg-gray-900 text-white hover:bg-gray-800">
                Guardar
            </button>

            <a href="{{ route('admin.productos.index') }}"
               class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-50">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
