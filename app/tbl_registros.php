<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class tbl_registros extends Model
{
    protected $fillable = [
        'Unidad_id', 'name', 'nombre', 'Edicion', 'ruta',
    ];


   
}
