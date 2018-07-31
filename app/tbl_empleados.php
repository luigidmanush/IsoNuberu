<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class tbl_empleados extends Model
{
    //
    protected $fillable = [
        'NoEmpleado', 'Ap_Paterno','Ap_Materno','Nombre','Foto',
    ];
}
