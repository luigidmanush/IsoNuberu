@extends('layouts.app')

@section('title','Dashboard ')
@section('Content')
@section('TitleTablero')
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tablero-Iso</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Nuberu-Iso</a></li>
                <li class="breadcrumb-item active">@yield('NamePage')</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            {{-- <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button> --}}
        </div>
    </div>
@endsection





@endsection
