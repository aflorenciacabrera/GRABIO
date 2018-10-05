@extends('layouts.menu')

@section('content')
<div class="col-md-10 col-md-offset-0" class="text-center" > 
	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Operaciones</h1> 
     </div>
        
		 {{-- <form method="POST" action="{{url('#')}}">
						@csrf
		 --}}

		<button class="pull-right" type="submit" class="btn btn-success">{{ __('Guardar') }} </button>
		<h3 class="page-header">Viales</h3>
		<div align="center">
		
				 <select name="" id="">
					 <option value="">seleccionar muestra</option>
					 @foreach ($muestras as $muestra)
					<option value="{{$muestra->id}}">{{$muestra->muestra}}</option>
					@endforeach
				</select>
				{{-- <th><label for="">Muestras:</label>  </th> --}}
				 <button  type="submit" class="btn btn-default ">{{ __('Ver detalles') }} </button>
				<br></br>
 		</div>

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
			          <th>Ceder a Receptor</th>
			          
			        </tr>
			      </thead>
			      <tbody>
					
			        <tr>
			          <th scope="row">V <label for="">1</label></th>
			          	  <td><input type="text" name="naturaleza" class="form-control"></td>
				          <td><input type="text" name="cantidad" class="form-control"></td>
				          <td><input type="text" name="concentracion" class="form-control"></td>
				          <td><input type="text" name="fecha_entrada" class="form-control"></td>
				          <td><input type="text" name="fecha_salida" class="form-control"></td>
				          <td><input type="text" name="organo" class="form-control"></td>
				          <td><input type="text" name="diagnostico" class="form-control"></td>
				         <td><button class="editbtn">Ceder</button></td>
				         
			        </tr>

			        <tr>
			          <th scope="row">V 2</th>
			          	  <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><button class="editbtn">Ceder</button></td>
				          
			        </tr>
			        <tr>
			          <th scope="row">V 3</th>
			          	  <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				          <td><input type="text" name="" class="form-control"></td>
				         <td><button class="editbtn">Ceder</button></td>
				        
			        </tr>
			      </tbody>
    		</table>
			
	
	</div>
</div></form>
		 {{-- <div align="center">
		        	
				 <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="">
				    Guardar</button> 
		</div> --}}

</div>
{{-- <script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Guardar' ? 'Ceder' : 'Guardar');
    });
});
       </script> --}}
           
@endsection