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
Route::post('/registro_ordenes', [App\Http\Controllers\ordenes_controller::class, 'registro_ordenes'])->name('registro_ordenes');
Route::get('/formato_orden/{id}', [App\Http\Controllers\ordenes_controller::class, 'formato_orden'])->name('formato_orden');
Route::get('/borrar_orden/{id}', [App\Http\Controllers\ordenes_controller::class, 'borrar_orden'])->name('borrar_orden');


//Produccion
Route::get('/dashboard_produccion', [App\Http\Controllers\produccion_controlador::class, 'dashboard_produccion'])->name('dashboard_produccion');
