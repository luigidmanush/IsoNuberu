<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Auth;
use App\tbl_empdatlabs;
use App\cat_turnos;
use App\cat_puestos;

class tbl_empleados extends Model
{
    //
    protected $fillable = [
        'NoEmpleado', 'Ap_Paterno','Ap_Materno','Nombre','Foto',
    ];


    public function Laboral()
    {
        return $this->hasOne('App\tbl_empdatlabs', "idEmpleado", "NoEmpleado"); 

    }

   




}
