<?php

use App\Http\Controllers\ServicesController;
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

Route::get('/active_services', [ServicesController::class, 'GetServices'])->name('active_services');
Route::get('/add_services', [ServicesController::class, 'ServicesForm'])->name('register_services');
Route::post('/save_services', [ServicesController::class, 'RegistrarServicioNuevo'])->name('new_services');
Route::put('/change_services/{id}', [ServicesController::class, 'ActualizarServicio'])->name('edit_services');
Route::put('/delete_services/{id}', [ServicesController::class, 'EliminarServicio'])->name('delete_services');




