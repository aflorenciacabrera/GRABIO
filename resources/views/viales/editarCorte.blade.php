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
                 <form method="POST" action="{{url('viales/corte/editar/'.$vial->id)}}" class="bootstrap-form-with-validation">
                                         {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                   
                        {{-- <div class=" "  align="center">
                           
                        </div> --}}
                       

                        <div class="form-group row ">
                        
                            <label for="name" class="col-md-2 col-form-label "> Naturaleza</label>

                            <div class="col-md-4">
                            <input id="name" type="text" class="form-control" name="naturaleza" value="{{$vial->naturaleza}}"  autofocus>
                            </div>
                         <label for="name" class="col-md-2 col-form-label "> Concentración</label>

                            <div class="col-md-4">
                            <input id="name" type="text" class="form-control" name="concentracion" value="{{$vial->concentracion}}"  autofocus>
                            </div>
 
                        </div>
   
                        <div class="form-group row ">
                            <label for="name" class="col-md-2 col-form-label "> Fecha Entrada:</label>

                            <div class="col-md-4">
                                <input id="name" type="date" class="form-control" name="fecha_entrada" value="{{$vial->fecha_entrada}}"  autofocus>
                            </div>
                            <label for="name" class="col-md-2 col-form-label "> Fecha Salida:</label>
                            <div class="col-md-4">
                                <input id="name" type="date" class="form-control" name="fecha_salida" value="{{$vial->fecha_salida}}"  autofocus>                          
                            </div>
                       
                            
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label ">Órgano:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="organo" value="{{$vial->organo}}"  autofocus>
                            </div>
                            <label for="name" class="col-md-2 col-form-label "> Diagnóstico:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="diagnostico" value="{{$vial->diagnostico}}"  autofocus>                          
                            </div>
<br><br><br>
                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
                                <h3 class="gallery-title text-center ">Datos de muestra vinculada  </h3> 
                            @foreach ($muestras as $muestra)                  
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group"> 
                                
                                <table class="table table-user-information">   
                                <tbody> 
                                <tr>         
                                    <td><label>Muestra:</label></td>
                                    <td> {{$muestra->muestra}}</td> 
                                    <td><label>Órgano:</label></td>
                                    <td> {{$muestra->organo}}</td>
                                     <td><label>Fecha de Cirugía:</label></td>
                                    <td>{{$muestra->fechaCiru}}</td>
                                     <td><label>Naturaleza:</label></td>
                                    <td>{{$muestra->naturaleza}}</td>
                                </tr> 
                                <p></p>
                                <tr>         
                                    <td><label>Código de Anatomía Patológica Diagnóstico:</label></td>
                                    <td>{{$muestra->capd}}</td>
                                    <td><label> Cantidad:</label></td>
                                    <td>{{$muestra->cantidad}}</td>
                                    <td><label>Concentración:</label></td>
                                    <td>{{$muestra->concentracion}}</td>
                                     </tr> 
                                    <tr>
                                    <td><label> Fecha de Entrada:</label></td>
                                    <td>{{$muestra->fechaE}}</td>
                                    <td><label>Fecha de Salida:</label></td>
                                    <td>{{$muestra->fechaS}}</td>
                                    <td><label>Observaciones:</label></td>
                                    <td>{{$muestra->observaciones}}</td>
                                    <td><label> Diagnóstico:</label></td>
                                    <td>{{$muestra->diagnostico}}</td>              
                                </tr> 
                                </tbody>
                                </table>
                                    
                            </div></div></div>

                        </div>
                         @endforeach
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