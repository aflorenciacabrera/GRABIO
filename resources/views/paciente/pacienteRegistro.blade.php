@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Ingreso de Paciente') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{url('paciente/ingreso')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Nombre</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Apellido</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="apellido" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> DNI</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="dni" value="" required autofocus>                          
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Dirección</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="direccion" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Teléfono</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="telefono" value="" required autofocus>                          
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Sexo</label>
                            <div class="col-md-4">
                                <select name="sexo" id="sexo">
                                    <option value="femenino"> Femenino </option>
                                    <option value="masculino"> Masculino </option>
                                </select>
                                                     
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Grupo  </label>
                            <div class="col-md-4">                               
                               <input id="name" type="text" class="form-control" name="grupo" value="" required autofocus>                          
                            </div>
                      
                        
                            <label for="name" class="col-md-2 col-form-label "> Factor  </label>

                            <div class="col-md-4" >
                                <select name="factor" id="factor">
                                    <option  value="positivo" required> Positivo</option>
                                    <option   value="negativo" required> Negativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/paciente') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection