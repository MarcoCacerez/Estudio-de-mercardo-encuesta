<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $encuestas = auth()->user()->encuestas;
    return view('dashboard', compact('encuestas'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    '/encuestas/crear',
    'App\Http\Controllers\EncuestaController@create'
)->middleware(['auth', 'verified'])->name('encuestas.create');

Route::post(
    '/encuestas',
    'App\Http\Controllers\EncuestaController@store'
)->middleware(['auth', 'verified'])->name('encuestas.store');

Route::get(
    '/encuestas/{encuesta}',
    'App\Http\Controllers\EncuestaController@show'
)->middleware(['auth', 'verified'])->name('encuestas.show');

Route::get(
    '/encuestas/{encuesta}/preguntas/crear',
    'App\Http\Controllers\PreguntaController@create'
)->middleware(['auth', 'verified'])->name('preguntas.create');

Route::post(
    '/encuestas/{encuesta}/preguntas',
    'App\Http\Controllers\PreguntaController@store'
)->middleware(['auth', 'verified'])->name('preguntas.store');


Route::get(
    '/formularios/{encuesta}-{slug}',
    'App\Http\Controllers\FormularioController@show'
)->middleware(['auth', 'verified'])->name('formulario.show');

Route::post(
    '/formularios/{encuesta}-{slug}',
    'App\Http\Controllers\FormularioController@store'
)->middleware(['auth', 'verified'])->name('formulario.store');

require __DIR__.'/auth.php';
