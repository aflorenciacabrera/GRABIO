@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
               
                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                                <h1 class="gallery-title text-center page-header">Editar viales </h1> 
                        </div>
        
            <div class="card-body">
                 <form method="POST" action="{{url('viales/corte/editar/{id}')}}" class="bootstrap-form-with-validation">
                                         {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                   
                        {{-- <div class=" "  align="center">
                           
                        </div> --}}
                       

                        <div class="form-group row ">
                        
                            <label for="name" class="col-md-2 col-form-label "> Naturaleza</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="naturaleza" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Fecha Entrada:</label>

                            <div class="col-md-4">
                                <input id="name" type="date" class="form-control" name="fecha_entrada" value="" required autofocus>
                            </div>
                        </div>
   
                        <div class="form-group row ">
                            <label for="name" class="col-md-2 col-form-label "> Fecha Salida:</label>
                            <div class="col-md-4">
                                <input id="name" type="date" class="form-control" name="fecha_salida" value="" required autofocus>                          
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label ">Órgano:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="organo" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Diagnóstico:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="diagnostico" value="" required autofocus>                          
                            </div>

                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                                <h3 class="gallery-title text-center page-header">Datos de muestra vinculada  </h3> 
                        </div>

                         </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('viales/corte') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>

                 

		 
</div></div></div></div>

	   
	   
           
@endsection