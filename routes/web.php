<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\TechniciansController;
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

Route::get('/sign_in', [AuthorizationController::class, 'signIn'])->name('sign-in');

Route::get('/active_services', [ServicesController::class, 'GetServices'])->name('active_services');
Route::get('/add_services', [ServicesController::class, 'ServicesForm'])->name('register_services');
Route::post('/save_services', [ServicesController::class, 'RegistrarServicioNuevo'])->name('new_services');
Route::put('/change_services/{id}', [ServicesController::class, 'ActualizarServicio'])->name('edit_services');
Route::put('/delete_services/{id}', [ServicesController::class, 'EliminarServicio'])->name('delete_services');

Route::get('/active_equipments', [EquipmentsController::class, 'GetEquipments'])->name('active_equipments');
Route::get('/add_equipments', [EquipmentsController::class, 'EquipmentForm'])->name('register_equipments');
Route::post('/save_equipments', [EquipmentsController::class, 'RegistrarEquipoNuevo'])->name('new_equipments');
Route::put('/change_equipments/{id}', [EquipmentsController::class, 'ActualizarEquipo'])->name('edit_equipments');
Route::put('/delete_equipments/{id}', [EquipmentsController::class, 'EliminarEquipo'])->name('delete_equipment');

Route::get('/technicians', [TechniciansController::class, 'GetTechnicians'])->name('technicians');
Route::get('/add_technicians', [TechniciansController::class, 'TechnicianForm'])->name('register_technicians');
Route::post('/save_technicians', [TechniciansController::class, 'AddTechnician'])->name('new_technicians');
Route::put('/change_technicians/{id}', [TechniciansController::class, 'UpdateTechnician'])->name('edit_technicians');
Route::delete('/delete_technicians/{id}', [TechniciansController::class, 'DeleteTechnician'])->name('delete_technician');

Route::get('/admin', [TestViewController::class, 'adminMenuView']);
Route::get('/clients', [TestViewController::class, 'clientAdminView']);
Route::get('/services', [TestViewController::class, 'servicesAdminView']);
Route::get('/technician', [TestViewController::class, 'techniciansAdminView']);




