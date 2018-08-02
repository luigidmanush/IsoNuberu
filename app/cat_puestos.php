<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_puestos extends Model
{
    protected $fillable = [
        'idPuesto','Puesto','Descripcion',
    ];
}
