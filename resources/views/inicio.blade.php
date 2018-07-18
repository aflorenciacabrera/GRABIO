@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

    	

	{{--Administrador--}}
     {{--  <div class="nav-item dropdown" >      
           <a  class="btn btn-info active btn-lg"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              
               <img src="{{asset('img/images (3).jpg')}}" width="100" /><br>
               <span class="label label-default">Administrador </span> 
            </a>
            
            <ul class="dropdown-menu multi-level"  style="width:270px"  role="menu" aria-labelledby="navbarDropdowndropdownMenu"> 

          
              <div class="form-login text-center">
              <h4>Iniciar Sesión</h4>
              </div> --}}
        		{{--correo electronico--}}
              {{--   <li><div class="input-group dropdown-item">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" style="width:200px;height:40px" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" required autofocus  placeholder="Correo electrónico">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div></li> 

                <li class="divider"><br></li> --}}
				{{--Contrasena--}}
               {{--  <li><div class="input-group dropdown-item">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" style="width:200px;height:40px"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña"> 
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                </div></li>
                     
                <li class="divider"><br></li> --}}
                {{--Aceptar--}}
               {{--  <div class="dropdown-item">
                   <li><button type="submit" class="btn btn-default ">Aceptar</button></li> 
               </div>
          </ul>
          
       </div> --}}
       {{-- fin Andministrador --}}


	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

    

        {{-- <a  class="menu-bar btn btn-sm btn-default"  role="button"data-toggle="collapse" href="#menu">
            <i class="glyphicon glyphicon-user"></i> Acceder <span class="bars"></span>             
        </a>
         --}}
    
{{-- 
<div class="container collapse menu" id="menu"> --}}
    <div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                @if(Session::has('activacion'))     
                        <div class="alert alert-danger  text-center" role="alert">
                            <span>{{Session::get('activacion')}}</span> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif
                <div class="card-header text-center"><h4>{{ __('Iniciar Sesión') }}</h4></div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       {{--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br> <hr style="width:75%;">         
         <div class="container ">
   
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
             <div class="card-header text-center"><h4>Registros</h4> </div>
          
              
          <br>
                 {{-- Panel de botones --}}
                    <div class="row">
                        <div class="col-md-10">
                            <div class="container-fluid">
                                <div class="col-md- col-md-offset-3">
                                	
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
                    
                {{--Fin de Panel de Botones--}}
             
             </div>
             <br>
              </div>  
       
 
 
    </div>
</div>

 </div>
</div>
@endsection
