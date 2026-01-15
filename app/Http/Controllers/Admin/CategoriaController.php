<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('orden')->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'orden' => 'nullable|integer',
        'activo' => 'sometimes|in:1',
    ]);

    $data['slug'] = Str::slug($data['nombre']);
    $data['activo'] = $request->boolean('activo');
    $data['orden'] = $data['orden'] ?? 0;

    Categoria::create($data);

    return redirect()
        ->route('admin.categorias.index')
        ->with('success', 'Categoría creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
       $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'orden' => 'nullable|integer',
        'activo' => 'sometimes|in:1',
    ]);

    $data['slug'] = Str::slug($data['nombre']);
    $data['activo'] = $request->boolean('activo');
    $data['orden'] = $data['orden'] ?? 0;

    $categoria->update($data);

    return redirect()
        ->route('admin.categorias.index')
        ->with('success', 'Categoría actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
         $categoria->delete();

        return redirect()
            ->route('admin.categorias.index')
            ->with('success', 'Categoría eliminada');
    }
}
