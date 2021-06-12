<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DireccionController;

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

Auth::routes();

Route::resource('paciente', PacienteController::class);

Route::resource('direccion', DireccionController::class);

Route::resource('medico', MedicoController::class);

Route::resource('receta', RecetaController::class);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
