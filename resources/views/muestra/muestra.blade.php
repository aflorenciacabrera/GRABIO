@extends('layouts.menu')

@section('content')

<div class="col-md-8 col-md-offset-0" class="text-center" > 
 
       
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Muestras</h1>
        </div>

        <div align="center">
        	<a href="{{url('muestra/ingreso')}}" class="btn btn-default filter-button">Ingreso de Muestra</a>
        	<a href="" class="btn btn-default filter-button">Lista de Muestras</a>

          </div>
           

</div>

@endsection