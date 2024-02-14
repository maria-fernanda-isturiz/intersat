<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Services extends Model
{
    use HasFactory;
    protected $table = "services";  //nombre de la tabla
 
    public function equipment()
    {
        return $this->belongsTo(Equipments::class, 'id_equipment');
    }
}