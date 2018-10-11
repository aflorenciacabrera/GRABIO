@extends('layouts.menu')

@section('content')
<div class="col-md-10 col-md-offset-0" class="text-center" > 
	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center page-header">Editar viales </h1> 
     </div>
        
      <div class="card-body">
                    {{-- <form method="POST" action="{{url('deposito/cesion')}}">
                        @csrf --}}
                        <div class=" "  align="center">
                           
                        </div>
                        
                             <td><input type="text" name="naturaleza" class="form-control"></td>
				          
				          <td><input type="text" name="concentracion" class="form-control"></td>
				          <td><input type="date" name="fecha_entrada" class="form-control"></td>
				          <td><input type="date" name="fecha_salida" class="form-control"></td>
				          <td><input type="text" name="organo" class="form-control"></td>
				          <td><input type="text" name="diagnostico" class="form-control"></td>
                        <div class="form-group row page-header ">
                        
                            <label for="name" class="col-md-2 col-form-label "> Naturaleza</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="naturaleza" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Fecha Entrada:</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="fecha_entrada" value="" required autofocus>
                            </div>
                        </div>
   
                        <div class="form-group row ">
                            <label for="name" class="col-md-2 col-form-label "> Fecha Salida:</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="fecha_salida" value="" required autofocus>                          
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
   
                        </div>
                        


                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/deposito') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    {{-- </form> --}}
                </div>

		 
</div>

	   
	   
           
@endsection