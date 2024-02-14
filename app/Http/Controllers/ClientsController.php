<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    #Client CRUD
    #Get all Clients
    public function getClients()
    {
        $clients = Clients::all();
        return view('clients', compact('clients'));
    }
    #Client form
    public function clientForm()
    {
        return view('add_new_clients');
    }
    #Add new client
    public function addClient(Request $request)
    {
        $client = new Clients();
        $client->name = $request->post('name');
        $client->lastname = $request->post('lastname');
        $client->address = $request->post('address');
        $client->phone = $request->post('phone');
        $client->email = $request->post('email');
        $client->password = $request->post('password');
        $client->save();
        return redirect()->route('clients');
    }
    #Update client
    public function updateclient(Request $request, $id)
    {
        $client = Clients::find($id);
        $client->name = $request->post('name');
        $client->lastname = $request->post('lastname');
        $client->address = $request->post('address');
        $client->phone = $request->post('phone');
        $client->email = $request->post('email');
        $client->password = $request->post('password');
        $client->update();
        return back();
    }
    #Delete client
    public function deleteclient($id)
    {
        $client = Clients::find($id);
        $client->delete();
        return back();
    }
}
