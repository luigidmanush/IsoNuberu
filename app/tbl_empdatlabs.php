<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cat_puestos;


class tbl_empdatlabs extends Model
{
    protected $fillable = [
        'idEmpleado','idEstatus','idTurno','Sueldo','FechaIngreso','idPuesto','idJefeDirecto','Periodo','FechaRenovacion',
    ];

 

    public function Puesto()
    {
        return $this->hasOne('App\cat_puestos', 'idPuesto', 'idPuesto');
    }    

}
