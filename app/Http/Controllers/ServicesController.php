<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\ServiceStatus;
use App\Models\Equipments;


class ServicesController extends Controller
{
    public function GetServices(){
        $services = \DB::table('services')->join('service_status', 'services.id_service_status', '=', 'service_status.id')->select('services.id', 'services.service', 'services.price','services.description', 'services.id_equipment','service_status.status')->where('service_status.id', '=', 1)->get();
        $service_status = \DB::table('service_status')->select('service_status.status', 'service_status.id')->where('service_status.id', '=', 1)->orWhere('service_status.id', '=', 3)->get();

        return view('services', compact('services', 'service_status'));
    }

    public function ServicesForm(){
        $services = Services::all();
        $service_status = ServiceStatus::all();

        return view('add_new_services', compact('services', 'service_status'));
    }

    public function RegistrarServicioNuevo(Request $request){
        $services = Services::find($id);
        $services = new Services();
       
        $services->service = $request->post('service');
        $services->price = $request->post('price');
        $services->description = $request->post('description');
        $services->id_service_status = 1;
        $services->id_equipments = $request->post('id_equipments');


        if(!$equipments){
            return back()->withErrors(['id_Equipments' =>'El equipo no existe']);

        }
        $services->save();

        return redirect()->route('active_services');
    }

    public function ActualizarServicio(Request $request, $id){
        $services = Services::find($id);

        $services->service = $request->post('service');
        $services->price = $request->post('price');
        $services->description = $request->post('description');
        $services->id_service_status = 1;
        $services->update();

        return back();
    }

    public function EliminarServicio(Request $request, $id){

        $services = Services::find($id);
        $services->id_services_status = $request->post('status');
        $services->update();

        return back();
    }
}
