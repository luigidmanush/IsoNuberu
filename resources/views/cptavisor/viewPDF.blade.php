@extends('layouts.app')

@section('title',$User->nombre)
@section('Content')
@section('NamePage','Procedimeinto - '  .$User->nombre)



<div class="Content">

        <object data="{{ $User->ruta }}" type="application/pdf" style="width:100%; height:720px;" >
                <param name="view" value="FitH"   />    
        </object> 

</div>



@endsection
