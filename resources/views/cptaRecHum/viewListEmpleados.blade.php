@extends('layouts.app')

@section('title',Auth::user()->nombre)
@section('Content')
@section('NamePage','Lista de Empleados')




<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>NoEmpleado</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Nombre (s)</th>
                                    <th>Turno</th>
                                    <th>FechaIngreso</th>
                                    <th>Estatus</th>
                                    <th>Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Empleados as $Empleado  )
                                <tr>
                                    <td style="width: 10%; text-align: center;">
                                        <div class="img-circle"><img src="/assets/images/users/avatarMan.png" class="img-circle" width="40%"></div>
                                    </td>
                                    <td style="width:5%; text-align: center;">{{ $Empleado->NoEmpleado }}</td>
                                    <td style="width:15%;">{{ $Empleado->Ap_Paterno }}</td>
                                    <td style="width:15%;">{{ $Empleado->Ap_Materno }}</td>
                                    <td style="width:20%;">{{ $Empleado->Nombre }}</td>
                                    <td style="width:10%;">Turno</td>
                                    <td style="width:10%;">FechaIngreso</td>
                                    <td style="width:10%;">Estatus</td>
                                    <td style="width:5%;">Perfil</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
                 
  
        
    


    @endsection
