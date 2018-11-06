<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<div class="container">
      <div class="row">
      	 <div class="  col-lg-8  col-lg-offset-2  toppad" >

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Perfil de {{ Auth::user()->name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> {{-- <img src="{{asset('img/descarga (3).jpg')}}" style="width:100px; height:100px; float:left; margin-right:30px;"  class="img-responsive" > --}}
                 <div class="col-lg-offset-1 " > 
                  <img alt="User Pic" src="/cargas/avatars/{{ Auth::user()->avatar }}" style="width:120px; height:120px; float:left; margin-right:50px;" id="profile-image1" class=" img-responsive"> 
                   </div>
                        <form enctype="multipart/form-data" action="{{url('/perfil')}}" method="POST">   
                        <input id="profile-image-upload" value="Seleccionar imagen" name="avatar" class="hidden" type="file" accept="image/*" >
                            <div   style="color:#999;" >haga clic aquí para cambiar la imagen del perfil</div>  
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Cargar" class="pull btn btn-sm btn-default active">
                        </form>  
                      </div>
                              <br>
                <div class=" col-md-16 col-lg-9 "> 
                  <table class="table table-user-information">

                    <tbody>
                      
                      {{--  <label>Cambiar foto de perfil:</label> --}}
                             {{--  <form enctype="multipart/form-data" action="{{url('productor/perfil')}}" method="POST">   
                                <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <br>
                                <input type="submit" value="Cargar" class="pull-right btn btn-sm btn-primary">
                              </form> --}}
                     
                      <tr>
                        <td>Usuario:</td>
                        <td>{{ Auth::user()->name }}</td>
                      </tr>

                      <tr>
                        <td>Nombre :</td>
                        <td>{{ Auth::user()->nombre }}</td>
                      </tr>
                     
                      <tr>
                        <td>Apellido:</td>
                        <td>{{ Auth::user()->apellido }}</td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</td>
                      </tr>
                      <tr>
                        <td>Rol que desempeña:</td>
                        <td>{{ Auth::user()->rol }}</td>
                      </tr>
                      <tr>
                        <td>Teléfono de contacto:</td>
                        <td>{{ Auth::user()->telefono }}</td>
                      </tr>
                      <tr>
                        <td>Hospital:</td>
                        <td>{{ Auth::user()->hospital}}</td>
                      </tr>
                      <tr>
                        <td>Trabajo:</td>
                        <td>{{ Auth::user()->trabajo }}</td>
                      </tr>
                      <tr>
                        <td>Archivo PDF:</td>
                        <td>{{ Auth::user()->archivo }}</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                 
              </div>
            </div>
                 <div class="panel-footer">
                    {{-- <div class="btn-group col-lg-offset-4 "> --}}
                        <a href="#" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Mensaje<i class="glyphicon glyphicon-envelope"></i></a>
                         <span class="pull-right"> 
                           <a href="#ventana"  data-original-title="Editar Perfil" type="button" class="btn btn-sm btn-warning " data-toggle="modal" > Editar <i class="glyphicon glyphicon-edit"></i></a>
                        {{-- <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">Editar <i class="glyphicon glyphicon-edit"></i></a> --}}
                        <a href="edit.html" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">Eliminar<i class="glyphicon glyphicon-trash"></i></a>
                         </span> 
                         {{-- </div> --}}
                    </div>

                     <div class="modal fade in" id="ventana" >

                      <div class="modal-dialog">
                        <div class="container">
                        <div class="row">
                           <div class="  col-lg-6 col-lg-offset-0  toppad" >
                              <div class="modal-content">
                                 <div class="panel panel-default">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Editar perfil de {{ Auth::user()->name }}</h3>
                                    </div>
                                  </div>
                                  <form method="POST" action="{{url('/perfil')}}" class="bootstrap-form-with-validation">
                                         {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                <div class=" col-md-16 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Usuario:</td>
                        <td><input  class="form-control" type="" name="name" value="{{ Auth::user()->name }}"></td>
                      </tr>

                      <tr>
                        <td>Nombre :</td>
                        <td><input  class="form-control" type="" name="name2" value="{{ Auth::user()->nombre }}"></td>
                      </tr>
                     
                      <tr>
                        <td>Apellido:</td>
                        <td><input  class="form-control" type="" name="apellido" value="{{ Auth::user()->apellido }}"></td>
                      </tr>
                      
                      <tr>
                        <td>Teléfono de contacto:</td>
                        <td><input  class="form-control" type="" name="telefono" value="{{ Auth::user()->telefono }}"></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="modal-footer">
                                    
                                       <div class="row">
                                              <div class="col-md-4 col-lg-offset-2 ">
                                                   {{--Boton de Guaedar --}}  
                                                  
                                                   <input type="hidden" name="id" value="{{ Auth::user()->id }}" >
                                                  <input type="submit" data-original-title="Editar perfil" data-toggle="tooltip" class="btn btn-sm btn-success" value="Guardar cambios " > </input>
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
                        </div>

            
         
        </div>

        <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
      </div>
    </div>