@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
       {{--  Panel de Registro de Investigador --}}
          <div class="card-header text-center"><h4>{{ __('Registro Investigador') }}</h4>
              {{-- Botón de seleccionar biobanco --}}
              <div class="pull-right"><a href="#seleccion"  class="btn  btn-info  right" type='button'  data-toggle="modal" > Seleccionar Biobanco <i class="glyphicon glyphicon-hand-up"></i></a></div>

               {{-- Ventana de Modal de selección de Biobanco --}}
                <div class="modal fade in" id="seleccion" >
                  <div class="modal-dialog">
                   <div class="container">
                    <div class="row">
                       <div class="  col-lg-6 col-lg-offset-0  toppad" >

                         <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    {{-- Título  --}}
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Seleccione Biobanco </h3>
                                    </div>
                                  </div>

                           {{-- Contenido de la tabla de selecciones de biobanco       --}}
                              <form method="POST" action="{{ route('register') }}">  @csrf
                                <div class=" col-md-16 col-lg-12 "> 
                                    <table class="table table-user-information">
                                      <tbody>
                                        <tr>
                                          <label for="">Biobanco:</label>
                                              <select name="biobanco_id"   required>
                                                 @foreach($biobancos as $biobanco)
                                                      <option  value="{{ $biobanco->id }}" selected>{{ $biobanco->nombreCor }}</option>
                                                  @endforeach
                                              </select>
                                        </tr>
                                        {{-- Datos de representante precargados --}}
                                          <td><div class="panel-title ">Datos de Representante</div> </td>        
                                         <tr>
                                          <td>Nombre:</td>
                                          <td><label for="" > </label></td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Apellido</td>
                                           <td><label for=""> </label></td>
                                        </tr>
                                        <tr>
                                          <td>Telefono de contacto:</td>
                                           <td><label for=""> </label></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    {{-- Footer Aceptar --}}
                                      <div class="modal-footer">           
                                           <div class="row">
                                                  <div class="col-md-4 col-lg-offset-2 ">
                                                       {{--Boton de Guaedar --}}  
                                                      <button type="submit" class="btn btn-primary">
                                                        {{ __('Aceptar') }}
                                                    </button>
                                                  </div>                                   
                                           </div>                                                
                                      </div> 
                              </form>        
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> {{-- Fin de Ventana de selecciones de biobanco --}}
              </div></div>
              {{-- Panel de Perfil de Investigador --}}
                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                        @csrf
                                    {{-- carga de imagen de perfil --}}
                         <div class="form-group row">
                         <label  class="col-md-4 col-form-label">Seleccionar Imagen de Perfil <i class="glyphicon glyphicon-user"></i></label>
                        <div class="col-md-4 col-lg-3 " align="center">
                          <input id="avatar" name="avatar"  type="file" accept="image/*" value="{{ old('avatar') }}" required autofocus>
                        </div>
                      </div>
                                 {{--  carga de datos --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label ">{{ __('Usuario') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="email" class="col-md-2 col-form-label ">{{ __(' Correo Electrónico') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="investigador" name="rol">

                        <div class="form-group row">
                            <label  class="col-md-2 col-form-label -">{{ __('Nombre') }}</label>

                            <div class="col-md-4">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            </div>
                            <label  class="col-md-2 col-form-label ">{{ __('Apellido') }}</label>
                             <div class="col-md-4">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>                            
                            </div>
                        </div>

                         <div class="form-group row">
                            <label  class="col-md-2 col-form-label -">{{ __('Teléfono de Contacto') }}</label>

                            <div class="col-md-4">
                                <input id="nombre" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>
                            </div>
                            <label  class="col-md-2 col-form-label ">{{ __('Hospital') }}</label>
                             <div class="col-md-4">
                                <input id="apellido" type="text" class="form-control" name="hospital" value="{{ old('hospital') }}" required autofocus>                            
                            </div>
                        </div>
                         <div class="form-group row">
                            <label  class="col-md-2 col-form-label -">{{ __('Lugar de Trabajo') }}</label>

                            <div class="col-md-10">
                                <input id="nombre" type="text" class="form-control" name="trabajo" value="{{ old('trabajo') }}" required autofocus>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label ">{{ __('Contraseña') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                       
                            <label for="password-confirm" class="col-md-2 col-form-label ">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                                  {{-- carga de Archivos --}}
                          <div class="form-group row">
                              <label for="" class="col-md-4 col-form-label ">Adjunte archivo PDF de certificación por GRABIO <i class="glyphicon glyphicon-paperclip"></i></label>
                              <input id="archivo" type="file" accept="application/pdf" name="archivo" value="{{ old('archivo') }}" required autofocus/> 
                         </div>

                       
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div> {{-- Fin de tabla de registro de Investigador --}}
            </div>
        </div>
    </div>
</div>


@endsection
