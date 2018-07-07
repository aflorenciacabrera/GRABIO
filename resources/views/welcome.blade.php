@extends('layouts.app')

@section('content')
 
        @if(Auth::user()->hasRole('admin'))
            <div>Acceso como Administrador</div>
            <a class="btn btn-success active btn-lg" role="button" href="{{url('responsable/principal') }}">
              Principal  </a> 
        @endif
           
        @if(Auth::user()->hasRole('responsable'))
           <div>Acceso como Responsable</div>
        @endif

        @if(Auth::user()->hasRole('tecnico'))
            <div>Acceso como Tecnico</div>
        @endif

        @if(Auth::user()->hasRole('investigador'))
            <div>Acceso como Investigador</div>
        @endif

        {{-- <div class="flex-center position-ref full-height">
            
        </div> --}}
    
@endsection