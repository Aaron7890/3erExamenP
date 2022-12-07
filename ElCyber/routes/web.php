<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;
use App\Http\Controllers\ContBD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/formulario', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/consultara', [ControladorPaginas::class, 'fConsultar'])->name('NConsultar');

Route::post('/guardarFormulario', [ControladorPaginas::class, 'procesarFormulario'])->name('NProcesar');

Route::get('/consultar', [ContBD::class, 'create'])->name('consultar.create');
Route::post('/consultar', [ContBD::class, 'store'])->name('consulta.store');

Route::get('/consultara', [ContBD::class, 'index'])->name('consultara.index');

Route::get('/formulario/{id}/edit', [ContBD::class, 'edit'])->name('formulario.edit');
Route::put('/formulario/{id}', [ContBD::class, 'update'])->name('formulario.update');

Route::get('/formulario/{id}/confirm', [ContBD::class, 'confirm'])->name('formulario.confirm');
Route::delete('/formulario/{id}', [ContBD::class, 'destroy'])->name('formulario.destroy');