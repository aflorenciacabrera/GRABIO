@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

    <div class="nav-item dropdown" style="width:160px;height:40px">      
         <a  class="btn btn-info active btn-lg"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            
             <img src="{{asset('img/images (3).jpg')}}" width="100" /><br>
             <span class="label label-default">Administrador </span> 
          </a>


          
          <ul class="dropdown-menu multi-level"  style="width:270px"  role="menu" aria-labelledby="navbarDropdowndropdownMenu"> 

        
            <div class="form-login text-center">
            <h4>Welcome back.</h4>
            
            
           
            </div>
        
        
   
                <li><div class="input-group dropdown-item">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" style="width:200px;height:40px" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" required autofocus  placeholder="Correo electrónico">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div></li> 

                <li class="divider"><br></li>

                <li><div class="input-group dropdown-item">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" style="width:200px;height:40px"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña"> 
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                </div></li>
                     
                <li class="divider"><br></li>
                <div class="dropdown-item">
                   <li><button type="submit" class="btn btn-default ">Aceptar</button></li> 
               </div>
          </ul>
       </div>

    	<a class="btn btn-info active btn-lg" role="button" href="{{ route('login') }}">
             <img src="{{asset('img/images (3).jpg')}}" width="100" /><br>
             <span class="label label-default">Administrador </span> </a>


        <div class="container">
        <div class="panel panel-default">
        	
             <hr style="width:75%;">
              <div class="col-md-20  text-center"> <label class="control-label "><h1>Registros </h1></label>
              </div>
          </div> 
        </div>

      
                 {{-- Panel de botones --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="col-md-12 col-md-offset-4">
                                	
                                    {{-- Responsable --}}
                                    <a class="btn btn-success active btn-lg" role="button" href="{{url('responsable/registro') }}">
                                        <img src="{{asset('img/images (2).jpg')}}" width="100" /><br>
                                        <span class="label label-default">Responsable </span> </a>
                                    {{-- Investigador--}}
                                    <a class="btn btn-warning active btn-lg" type="button" href="{{url('investigador/registro') }}">
                                        <img src="{{asset('img/descarga (3).jpg')}}" width="100" /><br>
                                    <span class="label label-default">Investigador </span> </a>
                                    {{-- Técnico --}}
                                    <a class="btn btn-danger active btn-lg" type="button"  href="{{ url('tecnico/registro')}}"> 
                                        <img src="{{asset('img/images (12).jpg')}}" width="100" /><br>
                                        <span class="label label-default">Técnico</span></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                {{--Fin de Panel de Botones--}}
             
             
    </div>
</div>


@endsection
