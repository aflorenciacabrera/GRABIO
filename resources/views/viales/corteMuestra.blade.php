@extends('layouts.menu')

@section('content')


<div class="col-md-8 col-md-offset-0" class="text-center" > 
	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Selección de Muestra para Corte</h1> 
     </div>
        <div align="center">
        	
		    <select name="" id="">
				
				<option value="">seleccionar muestas</option>
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
               <input   type="number"  name="" min="0" max="10000" step="1" placeholder="Corte" />
          
        </div>

        <h3 class="page-header">Viales</h3>

        <div class="gallery center col-md-18 col-md-offset-0">
    <div class="row">
		
    	    <h1 class="page-header"></h1>
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Naturaleza</th>
			          <th>Cantidad</th>
			          <th>Concentración</th>
			          <th>Fecha de Entrada</th>
			          <th>Fecha de Salida</th>
			          <th>Órgano</th>
			          <th>Diagnóstico</th>
			          
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">V 1</th>
			          	  <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				         
				         
			        </tr>

			        <tr>
			          <th scope="row">V 2</th>
			          	  <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          
				          
			        </tr>
			        <tr>
			          <th scope="row">V 3</th>
			          	  <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				         
				        
			        </tr>
			      </tbody>
    		</table>
			
	
	</div>
</div>
 {{-- <div align="center">
        	
		 <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="">
		    Guardar</button> 
</div> --}}
</div>
<script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Guardar' ? 'Ceder' : 'Guardar');
    });
});
       </script>
           
@endsection