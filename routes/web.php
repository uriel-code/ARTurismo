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
    return view('Principal');
})->name('Principal');

/*Route::get('/index', function () {
    return view('index');
});*/

Route::get('/Monumentos', function () {
    return view('Monumentos');
})->name('Monumentos');

Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('Nosotros');

Route::get('/Contactos', function () {
    return view('Contactos');
})->name('Contactos');