<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_empdatlabs extends Model
{
    protected $fillable = [
        'idEmpleado','idEstatus','idTurno','Sueldo','FechaIngreso','idPuesto','idJefeDirecto','Periodo','FechaRenovacion',
    ];
}
