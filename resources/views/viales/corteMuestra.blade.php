@extends('layouts.menu')

@section('content')


<div class="col-md-10 col-md-offset-0" class="text-center" > 
	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Selección de Muestra para Corte</h1> 
     </div>
        <div align="center">
        	<form method="POST" action="{{url('viales/corte')}}">
						@csrf
		    <select name="muestra_id" id="muestra" >
				
				<option value="">Seleccionar Muestra</option>
				@foreach ($muestras as $muestra)
					<option value="{{$muestra->id}}">{{$muestra->muestra}}</option>
				@endforeach
				</select>
				{{-- <div class="pull-right"><a href=""  class="btn  btn-success  right" type='button'  data-toggle="modal" >  Aceptar </a></div>  --}}
				 <button class="pull-right" type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
		    {{-- <select name="" id="">
		    	<option value="">seleccionar Vial</option>
		    </select> --}}
		   
		   	<label for=""></label>
               <input   type="number"  name="cantidad" min="0" max="10000" step="1" placeholder="Corte" />
          
        </div>

        <h3 class="page-header">Viales</h3>

        <div class="gallery center col-md-18 col-md-offset-0">
    <div class="row">
		
			  @if($viales->count())  
			
			<h1 class="page-header"></h1>
			
			
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Naturaleza</th>
			          {{-- <th>Cantidad</th> --}}
			          <th>Concentración</th>
			          <th>Fecha de Entrada</th>
			          <th>Fecha de Salida</th>
			          <th>Órgano</th>
			          <th>Diagnóstico</th>
			          <th>Ceder a Receptor</th>
			          <th>Editar</th>
			        </tr>
			      </thead>
			      <tbody>
					
					@foreach ($viales as $vial)
				
			        <tr>
			          <th scope="row">V <label for="">{{$vial->id}}</label></th>
			          	  <td><label for="">{{$vial->naturaleza}}</label></td>
						 <td><label for="">{{$vial->concentracion}}</label></td>
						  <td><label for="">{{$vial->fecha_entrada}}</label></td>
						   <td><label for="">{{$vial->fecha_salida}}</label></td>
							<td><label for="">{{$vial->organo}}</label></td>
							  <td><label for="">{{$vial->diagnostico}}</label></td>
				          
						 <td><button class="editbtn">Ceder</button></td>
						  <td><a href="#edit{{$vial->id}}"  class="btn  btn-warning  right" type='button'  data-toggle="modal" >   <i class="glyphicon glyphicon-edit"></i></a>
							  </td>
   
				       
			        </tr>	
					@endforeach
				
					@else
						<tr>
							<td colspan="8">No hay registrados de viales !!</td>
						</tr>
							
			        	@endif
			      </tbody>
    		</table>
			 
	
	</div>
</div>
 {{-- <div align="center">
        	
		 <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="">
		    Guardar</button> 
</div> --}}
</div></form>
						
	{{--  ventana de editar --}}
					<div class="modal fade in" id="edit{{$vial->id}}" >
                      <div class="modal-dialog">
                        <div class="container">
                        <div class="row">
                           <div class="  col-lg-8 col-lg-offset-0  toppad" >
                              <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <div class="panel-heading">
                                      <h3 class="panel-title text-center">Editar Corte de Vial {{$vial->muestra_id}} </h3>
                                    </div>
                                  </div>
                                   <div class="card-body">
					<form method="POST" action="{{url('viales/corte/editar')}}">
						{{ csrf_field() }}
                        {{ method_field('PUT') }}
                         
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Naturaleza</label>

                            <div class="col-md-4">
                                <input type="text" name="naturaleza" class="form-control" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Concentración</label>

                            <div class="col-md-4">
                                <input type="text" name="concentracion" class="form-control" value="" required autofocus>
                            </div>
						</div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Fecha de Entrada</label>
                            <div class="col-md-4">
                                <input type="date" name="fecha_entrada" class="form-control" value="" required autofocus>                          
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Fecha de Salida</label>
                            <div class="col-md-4">
                                <input type="date" name="fecha_salida" class="form-control" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Órgano</label>
                            <div class="col-md-4">
                                <input type="text" name="organo" class="form-control" value="" required autofocus>                          
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Diagnóstico</label>
                            <div class="col-md-4">
                               <input type="text" name="diagnostico" class="form-control" value="" required autofocus>
                                                     
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
                    
                </div>

                    </div> </div> </div> </div> </div> </div>
						</form>
<script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Guardar' ? 'Ceder' : 'Guardar');
    });
});
       </script>
           
@endsection