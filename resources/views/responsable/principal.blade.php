@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <div class="text-center"><h4>Acceso como Responsable</h4></div> --}}

        <div class="gallery center">
            <h1 class="gallery-title text-center">Acceso como Responsable</h1>
            <div align="center">
              <a href=""></a>
            
            {{-- <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('responsable/perfil') }}" >Perfil</a> --}}
           {{--  <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('investigador/perfil') }}"></a>
            <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('investigador/perfil') }}"></a> --}}
          <br>
        </div>
        </div>
{{-- lista de Técnicos --}}

<div class="row">
    <div class="col-md-12 col-md-offset-">    
       
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de técnico</h3></div>
          <div class="pull-right">
            <a href="" class="btn btn-info" ><span class="glyphicon glyphicon-plus"></span> Crear Biobanco </a>
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
            @foreach( $users as $user )  
             @if($user->hasRole('tecnico'))              
               
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol }}</td>        
               <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td> 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td>
               </tr>
                @endif 
                 @endforeach 
                @if($users->count(null))  
                          
              <tr>
                <td colspan="8">No hay técnico registrados !!</td>
              </tr>
                  @endif     
            </tbody>
          </table>
         
          
        </div> 
           </div> 
 


{{-- lista de Investigadores --}}

    
       <div class="panel-body">
          <div class="pull-left"><h3>Lista de Investigador</h3></div>
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
               @if($users->count())  
            @foreach( $users as $user )  
             @if($user->hasRole('investigador'))              
               
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol }}</td>        
               <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td> 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td>
               </tr>
                @endif 
                 @endforeach 
               @else
                          
              <tr>
                <td colspan="8">No hay investigadores registrados !!</td>
              </tr>
                  @endif     
            </tbody>
          </table>
         
          
        </div> 
           </div> 
 
</div>
</div>




@endsection