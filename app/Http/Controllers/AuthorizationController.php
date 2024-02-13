<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AuthorizationController extends Controller
{
    public function singIn(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        $adminUser = Users::select('name')->where('email', '=', $email)
        ->where('password', '=', $password)->get();

        foreach($adminUser as $admin){

            session(['id_admin' => $admin->id]);
            return view('admin');
        }

        return "Credenciales Inválidas";
    }

    public function cerrarSesion(){
        
    }
}
