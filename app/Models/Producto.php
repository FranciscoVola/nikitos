<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
     use HasFactory;
     
    protected $fillable = [
        'categoria_id',
        'nombre',
        'slug',
        'descripcion',
        'precio',
        'imagen',
        'orden',
        'activo',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
