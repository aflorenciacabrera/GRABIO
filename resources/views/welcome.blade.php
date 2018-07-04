@extends('layouts.app')

@section('content')
 
        @if(Auth::user()->hasRole('admin'))
            <div>Acceso como administrador</div>

            <a class="btn btn-success active btn-lg" role="button" href="{{url('responsable/principal') }}">
                                      
                                        Principal  </a>
           

           @else
            <div>Acceso usuario</div>
         @endif
           
        <div class="flex-center position-ref full-height">
           

            
        </div>
    
@endsection