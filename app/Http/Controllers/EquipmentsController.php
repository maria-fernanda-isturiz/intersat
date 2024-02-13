<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\EquipmentStatus;
use Illuminate\Support\Facades\DB;


class EquipmentsController extends Controller
{
    public function GetEquipments(){
        $equipments = DB::table('equipments')->join('equipment_status', 'equipments.id_equipment_status', '=', 'equipment_status.id')->select('equipments.id', 'equipments.name', 'equipments.description', 'equipment_status.status')->where('equipment_status.id', '=', 1)->get();
        $equipment_status = DB::table('equipment_status')->select('equipment_status.status', 'equipment_status.id')->where('equipment_status.id', '=', 1)->orWhere('equipment_status.id', '=', 3)->get();

        return view('equipments', compact('equipments', 'equipment_status'));
    }

    public function EquipmentForm(){
        $equipment = Equipments::all();
        $equipment_status = EquipmentStatus::all();

        return view('add_new_equipments', compact('equipment', 'equipment_status'));
    }

    public function RegistrarEquipoNuevo(Request $request){
        $equipment = new Equipments();

        $equipment->name = $request->post('equipment');
        $equipment->description = $request->post('description');
        $equipment->id_equipment_status = 1;
        $equipment->save();

        return redirect()->route('active_equipments');
    }

    public function ActualizarEquipo(Request $request, $id){
        $equipment = Equipments::find($id);

        $equipment->name = $request->post('equipment');
        $equipment->description = $request->post('description');
        $equipment->id_equipment_status = 1;
        $equipment->update();

        return back();
    }

    public function EliminarEquipo(Request $request, $id){

        $equipment = Equipments::find($id);
        $equipment->id_equipment_status = $request->post('status');
        $equipment->update();

        return back();
    }
}
