 @extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
             
                <div class="card-header text-center"><h4>{{ __('Registro Biobanco') }}</h4>                     
                  </div>
                     
                        <div class="container">
                        <div class="row">
           
                                 
                                     <form method="POST" action="{{url('responsable/biobanco')}}">
                              @csrf
                             
                                              

                                <div class=" col-md-12 col-lg-12 "  > 
                                          <table class="table table-user-information">
                                            <tbody>
                                              <br>
                                              <tr>
                                                <div class="form-group row">
                                                   <label  class="col-md-4 col-form-label">Seleccionar Imagen de Perfil <i class="glyphicon glyphicon-user"></i></label>
                                                  <div class="col-md-4 col-lg-3 " align="center">
                                                    
                                                    <input   name="foto"  type="file" accept="image/*" >
                                                  </div>
                                                </div>
                                              </tr>
                           
                                              <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">  
                                  
                                              <tr>
                                                <td>Nombre completo:</td>
                                                <td><input  class="form-control" type="" name="nombreComp" ></td>
                                              </tr>

                                              <tr>
                                                <td>Nombre corto:</td>
                                                <td><input  class="form-control" type="" name="nombreCor" ></td>
                                              </tr>
                                             
                                              <tr>
                                                <td>Direccón:</td>
                                                <td><input  class="form-control" type="" name="direccion" ></td>
                                              </tr>
                                              
                                              <tr>
                                                <td>Teléfono de contacto:</td>
                                                <td><input  class="form-control" type="" name="telefono" ></td>
                                              </tr>
                                              <tr>
                                                <td>Correo Electrónico:</td>
                                                <td><input  class="form-control" type="" name="correo" ></td>
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
                                          </div> 
                                        
                            </form> 
                                  </div>
                               
                                  </div>
                              </div>
                                </div>
                              </div>
                            </div>
                         
                            
@endsection
