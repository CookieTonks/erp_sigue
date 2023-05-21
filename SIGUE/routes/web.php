<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Ordenes de trabajo
Route::get('/dashboard_ordenes', [App\Http\Controllers\ordenes_controller::class, 'dashboard_ordenes'])->name('dashboard_ordenes');
Route::get('/buscador_ordenes', [App\Http\Controllers\ordenes_controller::class, 'buscador_ordenes'])->name('buscador_ordenes');
Route::post('/registro_ordenes', [App\Http\Controllers\ordenes_controller::class, 'registro_ordenes'])->name('registro_ordenes');
Route::get('/formato_orden/{id}', [App\Http\Controllers\ordenes_controller::class, 'formato_orden'])->name('formato_orden');
Route::get('/borrar_orden/{id}', [App\Http\Controllers\ordenes_controller::class, 'borrar_orden'])->name('borrar_orden');
Route::get('/mapeo_orden/{id}', [App\Http\Controllers\ordenes_controller::class, 'mapeo_orden'])->name('mapeo_orden');


//Produccion
Route::get('/dashboard_produccion', [App\Http\Controllers\produccion_controlador::class, 'dashboard_produccion'])->name('dashboard_produccion');
Route::get('/buscador_produccion', [App\Http\Controllers\produccion_controlador::class, 'buscador_produccion'])->name('buscador_produccion');
Route::get('/edicion_produccion/{id}', [App\Http\Controllers\produccion_controlador::class, 'edicion_produccion'])->name('edicion_produccion');
Route::post('/edicion_produccion/{id}', [App\Http\Controllers\produccion_controlador::class, 'edicion_produccion_post'])->name('edicion_produccion_post');
Route::post('/salida_produccion/', [App\Http\Controllers\produccion_controlador::class, 'salida_produccion'])->name('salida_produccion');


Route::get('/dashboard_tecnico', [App\Http\Controllers\produccion_controlador::class, 'dashboard_tecnico'])->name('dashboard_tecnico');
Route::get('/iniciar_orden/{id}', [App\Http\Controllers\produccion_controlador::class, 'iniciar_orden'])->name('iniciar_orden');
Route::get('/pausar_orden/{id}', [App\Http\Controllers\produccion_controlador::class, 'pausar_orden'])->name('pausar_orden');
Route::get('/terminar_orden/{id}', [App\Http\Controllers\produccion_controlador::class, 'terminar_orden'])->name('terminar_orden');


Route::get('/dashboard_administrador', [App\Http\Controllers\administrador_controller::class, 'dashboard_administrador'])->name('dashboard_administrador');
Route::post('/alta_cliente', [App\Http\Controllers\administrador_controller::class, 'alta_cliente'])->name('alta_cliente');

