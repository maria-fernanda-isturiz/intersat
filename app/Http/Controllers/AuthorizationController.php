<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AuthorizationController extends Controller
{
    public function signIn(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $usuario = Users::where('email', '=', $email)->first();

        if (!$usuario) {
            return response()->json(['error' => 'Correo electrónico o contraseña no válidos'], 401);
        }

        $id_rol = $usuario->id_rol;

        if (!is_numeric($id_rol) || $id_rol < 1) {
            return response()->json(['error' => 'Rol de usuario no válido'], 400);
        }

        switch ($id_rol) {
            case 1:
                return view('admin');
            case 2:
                return view('technician');
            case 3:
                return view('client');
            default:
                return response()->json(['error' => 'Acceso no autorizado'], 403);
        }
    }
}
