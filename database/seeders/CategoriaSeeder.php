<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $nombres = [
            'Tradicional Escolar',
            'Copetín',
            'Premium',
            'Sin TACC',
        ];

        foreach ($nombres as $i => $nombre) {
            Categoria::updateOrCreate(
                ['nombre' => $nombre],
                [
                    'slug'  => Str::slug($nombre),
                    'orden' => $i + 1,
                ]
            );
        }
    }
}
