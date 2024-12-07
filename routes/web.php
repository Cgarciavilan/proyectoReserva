<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//rutas para el asmin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
//rutas para el admin-usuario
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');
// ruta create
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');

Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store')->middleware('auth');
//rutas de accion ver
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');
//ruta editar
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');
// ruta actualizar
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');
//ruta eliminar
Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth');
//confirmar elimnacion
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth');

//Rutas para admin-Servicios
Route::get('/admin/servicios', [App\Http\Controllers\ServicioController::class, 'index'])->name('admin.servicios.index')->middleware('auth');
//Ruta crear Servicio
Route::get('/admin/servicios/create', [App\Http\Controllers\ServicioController::class, 'create'])->name('admin.servicios.create')->middleware('auth');
//Ruta enviar registro
Route::post('/admin/servicios/create', [App\Http\Controllers\ServicioController::class, 'store'])->name('admin.servicios.store')->middleware('auth');
//Ruta ver-Servicios
Route::get('/admin/servicios/{id}', [App\Http\Controllers\ServicioController::class, 'show'])->name('admin.servicios.show')->middleware('auth');
//Ruta vista-Edit servicios
Route::get('/admin/servicios/{id}/edit', [App\Http\Controllers\ServicioController::class, 'edit'])->name('admin.servicios.edit')->middleware('auth');
//Ruta actualizar servicio
Route::put('/admin/servicios/{id}', [App\Http\Controllers\ServicioController::class, 'update'])->name('admin.servicios.update')->middleware('auth');
//Ruta confirmar eliminar
Route::get('/admin/servicios/{id}/confirm-delete', [App\Http\Controllers\ServicioController::class, 'confirmDelete'])->name('admin.servicios.confirmDelete')->middleware('auth');
//Ruta Destroy
Route::delete('/admin/servicios/{id}', [App\Http\Controllers\ServicioController::class, 'destroy'])->name('admin.servicios.destroy')->middleware('auth');

//Rutas Citas-Index

Route::get('/admin/citas', [App\Http\Controllers\CitaController::class, 'index'])->name('admin.citas.index')->middleware('auth');
//Ruta Create
Route::get('/admin/citas/create', [App\Http\Controllers\CitaController::class, 'create'])->name('admin.citas.create')->middleware('auth');
//Ruta envio formulario
Route::post('/admin/citas/create', [App\Http\Controllers\CitaController::class, 'store'])->name('admin.citas.store')->middleware('auth');
