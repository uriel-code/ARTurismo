<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MisionesController;

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
    return view('Principal');
})->name('Principal');

/*Route::get('/index', function () {
    return view('index');
});*/

Route::get('/Monumentos', function () {
    return view('Monumentos');
})->name('Monumentos');

Route::get('/Funciones', function () {
    return view('Funciones');
})->name('Funciones');

Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('Nosotros');

Route::get('/Contactos', function () {
    return view('Contactos');
})->name('Contactos');

Route::get('/MonumentoMisiones', function () {
    return view('MonumentoMisiones');
})->name('MonumentoMisiones');


//Mostrar comentarios
Route::get('/MonumentoMisiones',[MisionesController::class,'Comentarios'])->name('ver-registros');

//Agregar comentario
Route::post('/MonumentoMisiones',[MisionesController::class,'store'])->name('addComentario'); 