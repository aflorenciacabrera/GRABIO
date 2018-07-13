@extends('layouts.perfil')
 @section('content')    
 
        @if(Auth::user()->hasRole('admin'))
           
            anda 1
             
        @endif
           
        @if(Auth::user()->hasRole('responsable'))
          
           anda 2

        @endif

        @if(Auth::user()->hasRole('tecnico'))
           
          anda 3

        @endif

        @if(Auth::user()->hasRole('investigador'))
           
            anda 4

        @endif

       

@endsection
@extends('layouts.app')