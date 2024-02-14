<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function adminMenuView(){
        return view('admin');
    }

    public function clientAdminView(){
        return view('client');
    }

    public function servicesAdminView(){
        return view('service');
    }

    public function techniciansAdminView(){
        return view('technician');
    }
}
