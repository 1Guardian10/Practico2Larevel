<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Usuarios
Route::get('/Usuarios',[UsuarioController::class,'index'])->name('usuarios.index');

Route::get('/Usuarios/crear',[UsuarioController::class,'crear'])->name('usuarios.crear');

Route::post('/Usuarios/create',[UsuarioController::class,'create'])->name('usuarios.store');

Route::get('/Usuarios/editar/{id}',[UsuarioController::class,'editar'])->name('usuarios.editar');

Route::put('/Usuarios/update/{usuario}',[UsuarioController::class,'update'])->name('usuarios.update');

Route::get('/Usuarios/eliminar/{id}',[UsuarioController::class,'delete'])->name('usuarios.delete');

//Productos

Route::get('/Productos',[ProductoController::class,'index'])->name('productos.index');

Route::get('/Productos/crear',[ProductoController::class,'crear'])->name('productos.crear');

Route::post('/Productos/create',[ProductoController::class,'create'])->name('productos.store');

Route::get('/Productos/editar/{id}',[ProductoController::class,'editar'])->name('productos.editar');

Route::put('/Productos/update/{producto}',[ProductoController::class,'update'])->name('productos.update');

Route::get('/Productos/eliminar/{id}',[ProductoController::class,'delete'])->name('productos.delete');

//Productos

Route::get('/Pedidos',[PedidoController::class,'index'])->name('pedidos.index');

Route::get('/Pedidos/crear',[PedidoController::class,'crear'])->name('pedidos.crear');

Route::post('/Pedidos/create',[PedidoController::class,'create'])->name('pedidos.store');

Route::get('/Pedidos/editar/{id}',[PedidoController::class,'editar'])->name('pedidos.editar');

Route::put('/Pedidos/update/{pedido}',[PedidoController::class,'update'])->name('pedidos.update');

Route::get('/Pedidos/eliminar/{id}',[PedidoController::class,'delete'])->name('pedidos.delete');