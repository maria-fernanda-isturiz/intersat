<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\clientes\StoreRequest;
use App\Http\Requests\clientes\UpdateRequest;

class clientes extends Controller
{
    public function index(){

        $cliente = clientes::get();
        return view('admin.clientes.index', compact('cliente') );

    }

    public function create(){
        return view('admin.clientes.create');
    }

    public function store(StoreRequest $request){
        clientes::create([$request->all(),'id_client_status'=>1]); //the number 1 will mean the client is active on the system.
        return redirect () ->route('cliente.index');
    }

    public function show(clientes $clientes){
        return view('admin.clientes.show', compact('clientes') );
        
    }

    public function edit(clientes $clientes){
        return view('admin.clientes.show', compact('clientes') );
    }
    
    public function update(UpdateRequest $request, clientes $clientes){
        $clientes->update($request->all());
        return redirect () ->route('cliente.index');
    }
    
    public function UpdateStatus(clientes $clientes){
        $clientes->update(['id_client_status'=>2]);// the number "2" will mean the status of client so in this case if the cu would like to delete their info, they directly will show inactive on the system.
        return redirect () ->route('cliente.index');
    }
}
