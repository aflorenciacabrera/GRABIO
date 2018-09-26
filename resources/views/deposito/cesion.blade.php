@extends('layouts.menu')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Solicitud') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{url('deposito/cesion')}}">
                        @csrf
                        <div class=" "  align="center">
                            <h4> Datos del Solicitante</h4>
                        </div>
                        
                             
                        <div class="form-group row page-header ">
                        
                            <label for="name" class="col-md-2 col-form-label "> Lugar de trabajo:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Contacto:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="apellido" value="" required autofocus>
                            </div>
                        </div>
   
                        <div class="form-group row ">
                            <label for="name" class="col-md-2 col-form-label "> Solicitud de Cesión:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="dni" value="" required autofocus>                          
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Evaluación del Comité Científico:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="direccion" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Evaluación del CEI:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="telefono" value="" required autofocus>                          
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Acuerdo de Transferencia de Material:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="telefono" value="" required autofocus> 
                                                     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Presupuesto:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="telefono" value="" required autofocus>                          
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Factura:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="telefono" value="" required autofocus> 
                                                     
                            </div>
                        </div>
                       


                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/deposito') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection