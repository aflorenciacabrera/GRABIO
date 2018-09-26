@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Ingreso de Depositante') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{url('deposito/depositante')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Nombre</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                        
                       
                            <label for="name" class="col-md-2 col-form-label "> Correo electronico</label>

                            <div class="col-md-4">
                                <input id="name" type="email" class="form-control" name="correo" value="" required autofocus>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> DNI</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="dni" value="" required autofocus>                          
                            </div>
                       
                            <label for="name" class="col-md-2 col-form-label "> Dirección</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="direccion" value="" required autofocus>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label "> Teléfono</label>
                            <div class="col-md-4">
                                <input  type="text" class="form-control" name="telefono" value="" required autofocus>                          
                            </div>
                        
                            <label for="name" class="col-md-2 col-form-label "> Nombre de contacto</label>
                            <div class="col-md-4">
                                <input  type="text" class="form-control" name="nombContac" value="" required autofocus>                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label "> Descripción  </label>
                            <div class="col-md-8">                               
                               <input id="name" type="text" class="form-control" name="descripcion" value="" required autofocus>                          
                            </div>
                      
                        <br>
                               </div>
                                <div class="form-group row">

                         <label  class="col-md-4 col-form-label">Seleccionar Imagen de Perfil <i class="glyphicon glyphicon-user"></i></label>
                        <div class="col-md-4 col-lg-3 " align="center">
                          <input id="avatar" name="avatar"  type="file" accept="image/*" value="{{ old('avatar') }}" required autofocus>
                        </div>

            
                        </div>
                         <div class="form-group row">
                          <label for="name" class="col-md-3 col-form-label "> Acuerdo de depósito</label>
                            <div class="col-md-4">
                                <select name="acuerdo" id="acuerdo">
                                    <option value="Si"> SI </option>
                                    <option value="No"> NO </option>
                                </select>
                                                     
                            </div>
                      
                           
                            
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/desposito') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection