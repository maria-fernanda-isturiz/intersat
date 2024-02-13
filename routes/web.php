<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;

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

Route::get('/active_equipments', [EquipmentsController::class, 'GetEquipments'])->name('active_equipments');
Route::get('/add_equipments', [EquipmentsController::class, 'EquipmentForm'])->name('register_equipments');
Route::post('/save_equipments', [EquipmentsController::class, 'RegistrarEquipoNuevo'])->name('new_equipments');
Route::put('/change_equipments/{id}', [EquipmentsController::class, 'ActualizarEquipo'])->name('edit_equipments');
Route::put('/delete_equipments/{id}', [EquipmentsController::class, 'EliminarEquipo'])->name('delete_equipment');



