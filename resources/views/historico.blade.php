@extends('layouts.menu')

@section('content')

		<div class="col-md-8 col-md-offset-0" class="text-center" >
            <h1 class="gallery-title text-center">Historial</h1> 
            <div class="container">
	<div class="row">

        <div class="col-md-12">
       {{--  <h4>Bootstrap Snipp for Datatable</h4> --}}
        <h3 class="page-header"></h3>
        <div class="table-responsive">   
              <table id="mytable" class="table table-bordred table-striped">                
                  <thead>
					<th></th>
					<th>Muestras</th>
					<th>Viales</th>
					<th>Paciente</th>
					<th>Depocitante</th>
					<th>Usuario</th>
					<th>Almacen</th>
					<th>Ver</th>
					<th>Cedido</th>
                   </thead>
			    <tbody>
			   
			    <tr>
			    <td><input type="checkbox" class="checkthis" /></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			    <td>{{-- <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-share-alt"></span> </button></p> --}}</td>
			    </tr>
			    
			 <tr>
			    <td><input type="checkbox" class="checkthis" /></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			    <td>{{-- <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-share-alt"></span></button></p> --}}</td>
			    </tr>
			    
			<tr>
			    <td><input type="checkbox" class="checkthis" /></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			    <td>{{-- <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-share-alt"></span></button></p> --}}</td>
			    </tr>
			    
			    </tbody>
			        
			</table>
<div class=" "  align="center">
                           
                        
				<div class="clearfix"></div>
				<ul class="pagination center">
				  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>     
				</div>
            </div>
        </div>
	</div>
</div>


{{-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>

        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
   
  </div>
   
    </div> --}}

{{--     <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>    
  </div> 
    </div> --}}
</div>


@endsection