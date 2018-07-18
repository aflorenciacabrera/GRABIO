@extends('layouts.perfil')
 @section('content')    
 
        @if(Auth::user()->hasRole('admin'))
           
         
             
        @endif
           
        @if(Auth::user()->hasRole('responsable'))
          
          

        @endif

        @if(Auth::user()->hasRole('tecnico'))
           
        

        @endif

        @if(Auth::user()->hasRole('investigador'))
           
        

        @endif

       

@endsection
@extends('layouts.app')