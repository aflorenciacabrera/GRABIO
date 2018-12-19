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
                       

 <div class="container ">
             <div  align="center" >            
<div class="col-md-5 col-md-offset-3">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
        <hr>
                    <h3 style="margin-bottom: 25px; text-align: center; gallery-title ">Datos de muestra vinculada</h3>
                     <hr>  @foreach ($muestras as $muestra)   
                        <div class="form-group">
                            <label>Muestra:</label> {{$muestra->muestra}}
                        </div>
                        <div class="form-group">
                             <label>Órgano:</label> {{$muestra->organo}}
                        </div>
                        <div class="form-group">
                            <label>Fecha de Cirugía:</label> {{$muestra->fechaCiru}}
                        </div>
                        <div class="form-group">
                            <label>Naturaleza:</label> {{$muestra->naturaleza}}
                        </div>
                        <div class="form-group">
                            <label>Código de Anatomía Patológica Diagnóstico:</label> {{$muestra->capd}} 
                        </div>
                        <div class="form-group">             
                            <label> Cantidad:</label> {{$muestra->cantidad}} 
                        </div>
                        <div class="form-group">            
                             <label>Concentración:</label>  {{$muestra->concentracion}} 
                        </div>
                        <div class="form-group">             
                             <label> Fecha de Entrada:</label> {{$muestra->fechaE}} 
                        </div>
                        <div class="form-group">         
                             <label>Fecha de Salida:</label>  {{$muestra->fechaS}}
                        </div>
                        <div class="form-group">         
                             <label>Observaciones:</label> {{$muestra->observaciones}}
                        </div>
                        <div class="form-group">         
                             <label> Diagnóstico:</label> {{$muestra->diagnostico}}                         
                        </div>
             @endforeach 
        
        </form>
    </div>
</div>
</div></div>
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