@extends('layouts.app')

@section('title',$User->nombre)
@section('Content')
@section('NamePage','Procedimeinto - '  .$User->nombre)

{{ $val }}

<div class="Content">

    if ( {{ $val=0 }} )
        <object data="{{ $User->ruta }}" type="application/pdf" style="width:100%; height:720px;" >
                <param name="view" value="FitH"   />    
        </object> 
    else
        <object data="{{ $val }}" type="application/pdf" style="width:100%; height:720px;" >
                <param name="view" value="FitH"   />    
        </object> 
    endif

</div>



@endsection
