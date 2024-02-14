<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\ServiceStatus;
use Illuminate\Support\Facades\DB;
use App\Models\Equipments;
use App\Models\EquipmentStatus;
 
 
class ServicesController extends Controller
{
    public function GetServices(){
        $services = DB::table('services')->join('service_status', 'services.id_service_status', '=', 'service_status.id')->select('services.id', 'services.service', 'services.price','services.description','service_status.status','services.id_equipment')->where('service_status.id', '=', 1)->get();
        $service_status = DB::table('service_status')->select('service_status.status', 'service_status.id')->where('service_status.id', '=', 1)->orWhere('service_status.id', '=', 2)->get();
 
        return view('services', compact('services', 'service_status'));
    }
 
    public function ServicesForm(){
        $services = Services::all();
        $service_status = ServiceStatus::all();
        $equipments = Equipments::all();
       
 
        return view('add_new_services', compact('services', 'service_status', 'equipments'));
    }
 
    public function RegistrarServicioNuevo(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'service' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'id_equipment' => 'required|exists:equipments,id', // Asegura que el id_equipment exista en la tabla equipments
        ]);
 
        // Crear una nueva instancia de Services
        $service = new Services();
 
        // Asignar los valores del servicio desde la solicitud
        $service->service = $request->input('service');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->id_service_status = 1; //  asignar el valor que corresponda a tu lógica de negocio
        $service->id_equipment = $request->input('id_equipment'); // Asigna el ID del equipo seleccionado desde el formulario
 
        // Guardar el servicio en la base de datos
        $service->save();
 
        // Redirigir a la ruta deseada después de guardar el servicio
        return redirect()->route('active_services');
    }
 
    public function ActualizarServicio(Request $request, $id){
        $services = Services::find($id);
 
        $services->service = $request->post('service');
        $services->price = $request->post('price');
        $services->description = $request->post('description');
        $services->update();
 
        return back();
    }
 
    public function EliminarServicio(Request $request, $id){
 
        $services = Services::find($id);
        $services->id_service_status = $request->post('status');
        $services->update();

        return back();
    }
}