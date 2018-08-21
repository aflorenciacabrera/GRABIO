@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Registro Investigador') }}</h4>
                    <div class="pull-right"><a href="#seleccion"  class="btn  btn-info  right" type='button'  data-toggle="modal" >Seleccionar <i class="glyphicon-plus" ></i></a></div>

                    <div class="modal fade in" id="seleccion" >
                      <div class="modal-dialog">
                        <div class="container">
                        <div class="row">
                           <div class="  col-lg-6 col-lg-offset-0  toppad" >
                              <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Seleccione Representante </h3>
                                    </div>
                                  </div>
                         <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <div class=" col-md-16 col-lg-12 "> 
                                          <table class="table table-user-information">
                                            <tbody>
                                              <tr>
                                                <td>Representante:</td>
                                               
                                                <td><select   >
                                                    <option value="">Representante</option>
                                                     
                                                </select> </td>
                                               
                                              </tr>
                                             
                                                <td><div class="panel-title ">Datos de Biobanco</div> </td>
                                                
                                             
                                              <tr>
                                                <td>Nombre:</td>
                                                <td><label for=""></label></td>
                                              </tr>
                                              
                                              <tr>
                                                <td>Descrición</td>
                                                 <td><label for=""></label></td>
                                              </tr>
                                              <tr>
                                                <td>Telefono:</td>
                                                 <td><label for=""></label></td>
                                              </tr>
                                            </tbody>
                                          </table>

                                          <div class="modal-footer">
                                                            
                                               <div class="row">
                                                      <div class="col-md-4 col-lg-offset-2 ">
                                                           {{--Boton de Guaedar --}}  
                                                         
                                                          <button type="submit" class="btn btn-primary">
                                                            {{ __('Aceptar') }}
                                                        </button>
                                                      </div>
                                                      {{--Boton de Guaedar --}}                                            
                                               </div>{{-- end row --}}                                                          
                                          </div> 
                                           </form>        
                                  </div>
                              </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> {{-- Fin de ventna --}}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="investigador" name="rol">
                         
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                       {{--  <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
                                </button>
                            </div>
                        </div> --}}
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
