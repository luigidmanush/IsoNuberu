@extends('layouts.app')

@section('title',Auth::user()->nombre)
@section('Content')
@section('NamePage','Empleados -    Perfil de Empleado')

<div class="row">
    <div class="col-lg-4">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Other Sample form</h4>
            </div>
            <div class="card-block">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">Person Info</h3>
                        <hr>
                        
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Other Sample form</h4>
            </div>
            <div class="card-block">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">Person Info</h3>
                        <hr>
                        
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








@endsection



    