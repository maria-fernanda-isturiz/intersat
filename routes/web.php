<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\TestViewController;
use App\Http\Controllers\AuthorizationController;


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
    return view('login');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/singin', [AuthorizationController::class, 'singIn'])->name('sing-in');
/*Ruteo para Equipos*/
Route::get('/active_equipments', [EquipmentsController::class, 'GetEquipments'])->name('active_equipments');
Route::get('/add_equipments', [EquipmentsController::class, 'EquipmentForm'])->name('register_equipments');
Route::post('/save_equipments', [EquipmentsController::class, 'RegistrarEquipoNuevo'])->name('new_equipments');
Route::put('/change_equipments/{id}', [EquipmentsController::class, 'ActualizarEquipo'])->name('edit_equipments');
Route::put('/delete_equipments/{id}', [EquipmentsController::class, 'EliminarEquipo'])->name('delete_equipment');



/*Ruteo para Clientes*/

/* Ruteo para Técnicos*/

/* Ruteo para Servicios*/

/* Ruteo para archivos PDF*/

/* Ruteo para vistas generales*/
Route::get('/clients', [TestViewController::class, 'clientAdminView']);

Route::get('/services', [TestViewController::class, 'servicesAdminView']);

Route::get('/technician', [TestViewController::class, 'techniciansAdminView']);




