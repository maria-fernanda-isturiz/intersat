<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'address',
        'phone',
        'email',
        'address',
        'password',
        'id_client_status',
        
    ];
}
