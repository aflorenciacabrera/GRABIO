@extends('layouts.app')

@section('content')

<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Libros</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="" class="btn btn-info" >Añadir Libro</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Resumen</th>
               <th>No. Páginas</th>
               <th>Edicion</th>
               <th>Autor</th>
               <th>Precio</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
             
            </tbody>

          </table>
        </div>
      </div>
     {{--  {{ $libros->links() }} --}}
    </div>
  </div>
</section>


@endsection