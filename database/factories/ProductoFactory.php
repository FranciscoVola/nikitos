<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        $nombre = $this->faker->unique()->words(3, true);

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'precio' => $this->faker->numberBetween(500, 5000),
            'categoria_id' => Categoria::inRandomOrder()->value('id'),
            'imagen' => null,
        ];
    }
}
