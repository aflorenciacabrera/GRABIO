@extends('layouts.app')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      {{-- <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div> --}}
        <div class="  col-lg-8  col-lg-offset-2  toppad" >
   
   
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Perfil de Investigador</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3  " align="center"> {{-- <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> --}} <img alt="User Pic" src="{{asset('img/default.jpg')}}" style="width:100px; height:100px; float:left; margin-right:30px;" id="profile-image1" class=" img-responsive"> 
                  <input id="profile-image-upload" class="hidden" type="file">
                        <div   style="color:#999;" >haga clic aquí para cambiar la imagen del perfil</div> 
                </div>
                              <br>
                             
              
                

                <div class=" col-md-16 col-lg-9 "> 
                  <table class="table table-user-information">

                    <tbody>
                       {{-- <tr>
                       <label>Cambiar foto de perfil:</label>
                              <form enctype="multipart/form-data" action="{{url('productor/perfil')}}" method="POST">   
                                <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <br>
                                <input type="submit" value="Cargar" class="pull-right btn btn-sm btn-primary">
                              </form>
                      </tr> --}}
                      <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                 {{--  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a> --}}
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="edit.html" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Mensaje<i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">Editar <i class="glyphicon glyphicon-edit"></i></a>
                        <a href="edit.html" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger">Eliminar<i class="glyphicon glyphicon-trash"></i></a>
                        </span>
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

    @endsection