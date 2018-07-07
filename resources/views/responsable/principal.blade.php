@extends('layouts.app')

@section('content')
<div class="text-center"><h4>Acceso como Responsable</h4></div>

{{-- lista de Técnicos --}}

<div class="row">
    <div class="col-md-12 col-md-offset-">    
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Técnicos</h3></div>
          <div class="pull-right">  
           <div class="btn-group">
               <a href="" class="btn btn-info" ><span class="glyphicon glyphicon-plus"></span> Crear Biobanco </a>
            </div>         
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Correo Electrónico</th>
               <th>Roles</th>               
               <th>Activar</th>
               <th>Desactivar</th>
             </thead>
             <tbody>            
              <tr>
                <td>name</td>
                <td>name</td>
                <td>name</td>          
               <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td> 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td>
               </tr>              
               <tr>
                <td colspan="8">No hay técnicos registrados !!</td>
              </tr>
             
            </tbody>
          </table>
        </div>     
 </div>


{{-- lista de Investigadores --}}

    
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Investigadores</h3></div>
          <div class="pull-right">
            
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Correo Electrónico</th>
               <th>Roles</th>               
               <th>Activar</th>
               <th>Desactivar</th>
             </thead>
             <tbody>            
              <tr>
                <td>name</td>
                <td>name</td>
                <td>name</td>          
               <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td> 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td>
               </tr>               
               <tr>
                <td colspan="8">No hay investigadores registrados !!</td>
              </tr>             
            </tbody>
          </table>
        </div>    
 
</div>



@endsection