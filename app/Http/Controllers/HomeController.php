<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        //últimos 6 productos cargados
        $productos = Producto::latest()->take(6)->get();

        return view('home', compact('productos'));
    }
}
