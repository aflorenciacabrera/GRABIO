
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LARAVEL') }} </title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
<body>
    <div id="app" >
        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
            
           <div class="nav-header " >
                <a class="navbar-brand " ><img src="{{asset('img/images (9).png')}}" width="35" />
                   <font face="  " size="5"> {{ config('app.name', 'Laravel') }}</font><span> : </span> <font face="Britannic Bold" size="3"> <span>Gestor de la Red Argentina de Biobancos</span></font>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button></div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
 @guest 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto navbar-right ">
                        <!-- Authentication Links -->
                       
                                                {{-- login--}}
<div class="row" style="padding-top:30px">
 <div class=" col-lg-12 text-center">
   <a  class=" btn btn-sm btn-default"  role="button" href="{{ route('login') }}">
            <i class="glyphicon glyphicon-user"></i> Acceder             
        </a>
      <a  class=" btn btn-sm btn-default"  role="button" href="{{ url('/') }}">
            <i class="glyphicon glyphicon-home"></i> INICIO             
        </a></div>

                   {{--  <form method="POST" action="{{ route('login') }}">
                        @csrf

                             <div class="nav-item dropdown  navbar-right " style="width:160px;height:40px"> 
                                  
                                    
                                     <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="glyphicon glyphicon-user"></i> Acceder <span class="caret"></span>
                                      </a>
                                       
                                      <ul class="dropdown-menu multi-level"  style="width:270px"  role="menu" aria-labelledby="navbarDropdowndropdownMenu"> 
								            <div class="form-login text-center">
								            <h4>Iniciar Sesión</h4>
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
                     </form> --}} 
                     </div>
                            {{-- login 2--}}
                             
                                  {{-- <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" value="" placeholder="Correo electrónico"> </div>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="contrasena" value="" placeholder="Contraseña"> </div> 

                                    <button type="submit" class="btn btn-default">Acceder</button> --}}
                                   
                                    {{-- <li><a class="nav-link" href="#">{{ __('Acceder') }}</a></li>  --}}
                                      </ul>
                          @else

                      
 <div class="col-md-8 col-md-offset-2" > <p> <h4> <i class="glyphicon glyphicon-tags"></i>  {{ Auth::user()->rol }}:   {{ Auth::user()->name }}</h4> </p></div>
<ul class="navbar-nav ml-auto navbar-right ">
    
     <div class="row" style="padding-top:10px"> 

      <div class=" col-lg-12 text-center">

        <div class="btn-group">
            
             <span class="pull-right"> 
               <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
            <a  class="btn btn-sm btn-default"    role="button" href="{{url('/principal') }}" >Principal <i class="glyphicon glyphicon-folder-open"></i></a>
            <a  class="btn btn-sm btn-default" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Salir') }} <i class="glyphicon glyphicon-share"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </span> 

        {{-- <ul class="list-inline ">
            <li> <a class="dropdown-item" role="button" > <h4>{{ Auth::user()->name }}</h4>  </a></li>
            <li><a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a></li>
            <li><a  class="btn btn-sm btn-default"    role="button" href="{{url('/principal') }}" >Principal <i class="glyphicon glyphicon-folder-open"></i></a></li>
            <li><a  class="btn btn-sm btn-default" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Salir') }} <i class="glyphicon glyphicon-share"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form></li>                             
        </ul>   --}}
       </div>
        </div>
        </div>
 </ul>

 @endguest 

                </div>
            </div>
        </nav>
 
      

   
        <main class="py-4">
            @yield('content')
        </main>



    </div>

</body>
</html>
