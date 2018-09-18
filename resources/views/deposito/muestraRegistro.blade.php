@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Ingreso de Muestra') }}</h4> </div>

                <div class="card-body">
                    <div class="pull-right"><a href="#paciente"  class="btn  btn-info  right" type='button'  data-toggle="modal" >  Ingresar  paciente <i class="glyphicon glyphicon-plus"></i></a></div>

                     <div class="modal fade in" id="paciente" >
                      <div class="modal-dialog">
                        <div class="container">
                        <div class="row">
                           <div class="  col-lg-8 col-lg-offset-0  toppad" >
                              <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Ingreso de Paciente </h3>
                                    </div>
                                  </div>
                                   <div class="card-body">
                    <form method="POST" action="{{url('deposito/paciente')}}">
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

                      

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a  href="" aria-label="Close" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>

                    </div> </div> </div> </div> </div> </div>



                    <form method="POST" action="{{url('deposito/muestra')}}">
                        @csrf

{{-- <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade  in active">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade  in active">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div> --}}
                        <div class="form-group row col-lg-offset-4"   align="center">
                        <label for="name" class="col-md-3 col-form-label "> Paciente:</label>

                            <div class="col-md-3">
                                <select name="paciente_id" id="">
                                    <option value="1">  Seleccione paciente</option>
                                </select>
                               
                            </div>
                            </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Muestra:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="muestra" value="" required autofocus>
                            </div>

                           

                            <label for="name" class="col-md-2 col-form-label "> Órgano:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="organo" value="" required autofocus>
                            </div>
       
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Fecha de Cirugía:</label>
                            
                            <div class="col-md-2">
                                <input id="name" type="date" class="form-control" name="fecha" value="" required autofocus>
                                
                            </div>
                              <label for="name" class="col-md-2 col-form-label ">Naturaleza </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="naturaleza" value="" required autofocus>
                            </div>
                            </div>
                             <div class="form-group row">
                       <label for="name" class="col-md-5 col-form-label "> Código de Anatpomía Patológica Diagnóstico:</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="organo" value="" required autofocus>
                            </div>
                           </div>
                          
                       
                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Cantidad:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="cantidad" value="" required autofocus>
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Concentración:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="concentracion" value="" required autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Fecha de Entrada:</label>

                            <div class="col-md-2">
                                <input id="name" type="date" class="form-control" name="fechaE" value="" required autofocus>
                                
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Fecha de Salida:</label>

                            <div class="col-md-2">
                                <input id="name" type="date" class="form-control" name="fechaS" value="" required autofocus>
                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Observaciones:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="observaciones" value="" required autofocus>
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Diagnóstico:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="diagnostico" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/muestra') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection