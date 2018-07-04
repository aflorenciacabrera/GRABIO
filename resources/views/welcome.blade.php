@extends('layouts.app')

@section('content')
 
        @if(Auth::user()->hasRole('admin'))
            <div>Acceso como administrador</div>
            @else
            <div>Acceso usuario</div>
            @endif
           
        <div class="flex-center position-ref full-height">
           

            
        </div>
    
@endsection