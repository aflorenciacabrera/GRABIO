@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

{{-- <div class="text-center"><h4>Acceso como Administrador</h4></div> --}}

        <div class="gallery  center">
            <h1 class="gallery-title text-center">Acceso como Administrador</h1>
            <div align="center">
              <a href=""></a>
            
            {{-- <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('administrador/perfil') }}" >Perfil</a> --}}
           {{--  <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('investigador/perfil') }}"></a>
            <a class="btn btn-default filter-button active btn-lg" role="button" href="{{url('investigador/perfil') }}"></a> --}}
          <br>
        </div>
        </div>
<div class="row">
  {{-- <section class="content"> --}}
    <div class="col-md-12 col-md-offset-">
      {{-- <div class="panel panel-default"> --}}
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Responsables</h3></div>
          <div class="pull-right">
            {{-- <div class="btn-group">
               <a href="" class="btn btn-info" > </a>
            </div> --}}
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
             {{--  @if($user->count())   --}}
              {{-- @foreach($user as $user)   --}}
              <tr>
                <td>name</td>
                <td>name</td>
                <td>name</td>
                
               <td><a class="btn btn-primary btn-xs " href="" ><span class="glyphicon glyphicon-ok"></span></a></td> 
                <td>
                 {{--  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE"> --}}

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                 </td>
               </tr>
               {{-- @endforeach 
               @else --}}
               <tr>
                <td colspan="8">No hay responsables registrados !!</td>
              </tr>
             {{--  @endif --}}
            </tbody>

          </table>
        </div>
     
     {{--  {{ $libros->links() }} --}}
   
{{-- </section>--}}
 </div>
 {{-- </div> --}}
  </div>
@endsection