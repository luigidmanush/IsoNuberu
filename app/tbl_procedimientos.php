<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class tbl_procedimientos extends Model
{
    protected $fillable = [
        'name', 'nombre', 'Edicion','ruta',
    ];


   
}
