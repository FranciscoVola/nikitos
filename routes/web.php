<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\PublicController;

// ==================
// PÚBLICO
// ==================
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/productos', [PublicController::class, 'productos'])->name('productos');
Route::get('/donde-comprar', [PublicController::class, 'dondeComprar'])->name('donde_comprar');

Route::get('/recetas', [PublicController::class, 'recetas'])->name('recetas');
Route::get('/recetas/{slug}', [PublicController::class, 'recetaDetalle'])->name('recetas.detalle');

Route::get('/nosotros', [PublicController::class, 'nosotros'])->name('nosotros');

Route::get('/contacto', [PublicController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PublicController::class, 'contactoEnviar'])->name('contacto.enviar');

// ==================
// AUTH
// ==================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==================
// ADMIN
// ==================
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('categorias', CategoriaController::class);
        Route::resource('productos', ProductoController::class);
});
