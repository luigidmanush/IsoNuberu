<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\tbl_procedimientos;
use App\tbl_registros;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','unidad_id','avatar','role_id',
    ];

    public function getprocedimiento()
    {
        return tbl_procedimientos::where('id', $this->unidad_id)->first();
        
    }

    public function getregistros()
    {
       
       return $registros=collect(tbl_registros::where('Unidad_id',$this->unidad_id)->get());
    }
    
    
    /** 
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
