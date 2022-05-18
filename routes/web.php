<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EcoController;
use App\Http\Controllers\AreController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::resource('eco', EcoController::class);
Route::resource('equipo',  EquipoController::class);
Route::resource('empleado',EmpleadoController::class);
Route::resource('are', AreController::class);
//Route::name('borrar_equipo')->get('borrar_area/{id?}', 'EquipoController@borrar_equipo');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
