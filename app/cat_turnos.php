<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_turnos extends Model
{
    protected $fillable = [
        'idTurno','Turno','Horario_Inicio','Horario_Termino','Jornada','Alimentos','Descanso',
    ];
}
