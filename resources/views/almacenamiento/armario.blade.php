@extends('layouts.menu')

@section('content')


<div class="col-md-8 col-md-offset-0" class="text-center" > 
       
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Armario</h1> 
     </div>
        <div align="center">
        	{{-- <a href="{{url('almacenamiento/nuevoArmario')}}" class="btn btn-info filter-button">Nuevo Armario <i class="glyphicon glyphicon-plus"></i></a> --}}
		    <a href="#armario" type="button" class="btn btn-primary" data-toggle="modal" data-target="">
		    <span class="glypicon glyphicon glyphicon-plus"></span>Nuevo Armario</a>
        </div>
		
		<div class="modal fade in" id="armario" >
                      <div class="modal-dialog">
                        <div class="container">
                        <div class="row">
                           <div class="  col-lg-8 col-lg-offset-0  toppad" >
                              <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <div class="panel-heading">
                                      <h3 class="panel-title text-center">Nuevo Armario </h3>
                                    </div>
                                  </div>
                               <div class="card-body">
			                    <form method="POST" action="{{url('')}}">
			                        @csrf

			                        <div class="form-group row">
			                            <label for="name" class="col-md-2 col-form-label "> Estante </label>

			                            <div class="col-md-4">
			                                <input id="name" type="text" class="form-control" placeholder=" A-B-C-D " name="nombre" value="" required autofocus>
			                            </div>
			                        
			                       
			                            <label for="name" class="col-md-2 col-form-label "> Caja</label>

			                            <div class="col-md-4">
			                                <input id="name" type="text" class="form-control" name="apellido" value="" required autofocus>
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <label for="name" class="col-md-2 col-form-label "> Cajón</label>
			                            <div class="col-md-4">
			                                <input id="name" type="text" class="form-control" name="dni" value="" required autofocus>                          
			                            </div>
			                       
			                            <label for="name" class="col-md-2 col-form-label "> Posición</label>
			                            <div class="col-md-4">
			                                <input id="name" type="text" class="form-control" name="direccion" value="" required autofocus>
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


        <br>
<div class="gallery center col-md-10 col-md-offset-1">
    <div class="row">
		
    	    <h1 class="page-header"></h1>
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>A</th>
			          <th>B</th>
			          <th>C</th>
			          <th>D</th>
			         {{--  <th>E</th>
			          <th>F</th> --}}
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">1</th>
			          	  <td><a href="{{ url('almacenamiento/posiciones') }}" type="button" class="btn btn-primary btn-circle">A.1 <i class="glyphicon glyphicon-list"></i></a></td>
				          <td><a href="" type="button" class="btn btn-success btn-circle " >B.1 <i class="glyphicon glyphicon-list"></i></a>
				          </td>
				          <td><a href="" type="button" class="btn btn-danger btn-circle ">C.1 <i class="glyphicon glyphicon-list"></i></a></td>
				          <td><a href="" type="button" class="btn btn-warning btn-circle ">D.1 <i class="glyphicon glyphicon-list"></i></a></td>
				          {{-- <td>E.1</td>
				          <td>F.1</td> --}}
			        </tr>

			        <tr>
			          <th scope="row">2</th>
			          	  <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          {{-- <td>E.2</td>
				          <td>F.2</td> --}}
			        </tr>
			        <tr>
			          <th scope="row">3</th>
			          	  <td></td>
				          <td></td>
				          <td></td>
				          <td></td>
				          {{-- <td>E.3</td>
				          <td>F.3</td> --}}
			        </tr>
			      </tbody>
    		</table>
			{{-- <div class="row">
				<div class="col-md-8">
					<nav>
						<ul class="pagination">
							<li>
							<a href="#" aria-label="Previous">
							<span aria-hidden="true">«</span>
							</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
							</a>
							</li>
						</ul>
					</nav>
				</div>
			</div> --}}
	
	</div>
</div>
   </div>
           
@endsection