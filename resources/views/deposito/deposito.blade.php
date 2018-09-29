@extends('layouts.menu')

@section('content')

<div class="col-md-8 col-md-offset-0" class="text-center" > 
 
       
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Depósito</h1>
            <br>  <h4 class="gallery-title text-center">Gestión de Muestras</h4>
        </div>

        <div align="center">
        	<a href="{{url('deposito/depositante')}}" class="btn btn-default filter-button">Ingreso de Depositante</a>
        	<a href="{{url('deposito/paciente')}}" class="btn btn-default filter-button">Ingreso de Paciente</a>
        	<a href="{{url('deposito/muestra')}}" class="btn btn-default filter-button">Ingreso de Muestra</a>
        	<a href="{{url('solicitud/muestra')}}" class="btn btn-default filter-button active">Solicitud Cesión</a>
        	
          </div>
    <div class="row">
    <div class="col-md-12 col-md-offset-0">    
            <div class="panel-body">
                  <div class="pull-left"><h3>Lista de Depósito </h3></div>
                  <div class="pull-right"> 
                  </div>
                  <div class="table-container">
                    <table id="mytable" class="table table-bordred table-striped">
                     <thead>
                       <th>Muestra</th>
                       <th>Paciente</th>
                       <th>Depositante</th>               
                       <th>Cesión</th>
                     </thead>
                     <tbody>             
                      <tr>
                        <td colspan="8">No hay  registrados !!</td>
                      </tr>
                            
                    </tbody>
                  </table>          
                </div> 
           </div>
    </div>
    </div>
</div>

@endsection