<?php

namespace App\Http\Controllers;

use App\Models\Technicians;
use Illuminate\Http\Request;

class TechniciansController extends Controller
{
    #Technician CRUD
    #Get all technicians
    public function getTechnicians()
    {
        $technicians = Technicians::all();
        return view('technicians', compact('technicians'));
    }
    #Technician form
    public function technicianForm()
    {
        return view('add_new_technicians');
    }
    #Add new technician
    public function addTechnician(Request $request)
    {
        $technician = new Technicians();
        $technician->name = $request->post('name');
        $technician->lastname = $request->post('lastname');
        $technician->address = $request->post('address');
        $technician->phone = $request->post('phone');
        $technician->email = $request->post('email');
        $technician->password = $request->post('password');
        $technician->save();
        return redirect()->route('technicians');
    }
    #Update technician
    public function updateTechnician(Request $request, $id)
    {
        $technician = Technicians::find($id);
        $technician->name = $request->post('name');
        $technician->lastname = $request->post('lastname');
        $technician->address = $request->post('address');
        $technician->phone = $request->post('phone');
        $technician->email = $request->post('email');
        $technician->password = $request->post('password');
        $technician->update();
        return back();
    }
    #Delete technician
    public function deleteTechnician($id)
    {
        $technician = Technicians::find($id);
        $technician->delete();
        return back();
    }
}
