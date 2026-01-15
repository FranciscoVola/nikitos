<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function productos() {
        return view('productos');
    }

    public function dondeComprar() {
        $puntos = [
            ['nombre' => 'Mayorista Centro', 'direccion' => 'Av. Siempre Viva 123', 'zona' => 'CABA', 'tel' => '11 1234-5678'],
            ['nombre' => 'Distribuidora Oeste', 'direccion' => 'Ruta 7 Km 32', 'zona' => 'Merlo', 'tel' => '0220 492-4752'],
            ['nombre' => 'Kiosco Norte', 'direccion' => 'Calle Falsa 456', 'zona' => 'San Isidro', 'tel' => '11 2345-6789'],
        ];

        return view('public.donde-comprar', compact('puntos'));
    }

    public function recetas() {
        $recetas = [
            ['titulo' => 'Nachos Nikitos', 'slug' => 'nachos-nikitos', 'img' => 'img/recetas/receta1.png', 'tiempo' => '10 min'],
            ['titulo' => 'Dip Picante', 'slug' => 'dip-picante', 'img' => 'img/recetas/receta2.png', 'tiempo' => '15 min'],
            ['titulo' => 'Tabla Snack', 'slug' => 'tabla-snack', 'img' => 'img/recetas/receta3.png', 'tiempo' => '8 min'],
        ];

        return view('public.recetas', compact('recetas'));
    }

    public function recetaDetalle($slug) {
        return view('public.receta-detalle', compact('slug'));
    }

    public function nosotros() {
        return view('public.nosotros');
    }

    public function contacto() {
        return view('public.contacto');
    }

    public function contactoEnviar(Request $request) {
        $request->validate([
            'nombre' => 'required|min:2',
            'email' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        return back()->with('success', '¡Gracias! Recibimos tu mensaje y te responderemos pronto.');
    }
}
