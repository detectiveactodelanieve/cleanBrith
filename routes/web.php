<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;
use App\Http\Controllers\panel\MisVisController;

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

Route::get('/',[paginacontroller::class, 'inicio']);
Route::get('/admin',[paginacontroller::class, 'paneldecontrol']);

/*mision y vision */
Route:: get ('/MisVis',[MisVisController::class, 'index']);
