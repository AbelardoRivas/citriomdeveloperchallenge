<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use Symfony\Component\Routing\Loader\Configurator\Traits\RouteTrait;

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

Route::get('/', [PeliculaController::class, 'inicio']);
Route::post('/guardado', [PeliculaController::class, 'guardar']);
Route::get('/peliculas', [PeliculaController::class, 'listado']);
Route::post('/gustado', [PeliculaController::class, 'megusta']);

