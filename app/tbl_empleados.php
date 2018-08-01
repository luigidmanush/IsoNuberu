<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Auth;
use App\tbl_empdatlabs;

class tbl_empleados extends Model
{
    //
    protected $fillable = [
        'NoEmpleado', 'Ap_Paterno','Ap_Materno','Nombre','Foto',
    ];

    public function getTurnoTextAttribute($value)
    {
      return tbl_empdatlabs::where('idEmpleado',$this->NoEmpleado)->first()->idTurno;
       
    }





}
