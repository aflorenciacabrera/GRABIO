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

                                
                                 </div>
                                  </div>
                                  </div>
                           </ul>                 
                </div>
            </div>
        </nav>
 
      {{-- <div class="row affix-row"> --}}
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
  <div class="navbar navbar" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        {{-- <li class=""> --}}
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed ">
          <h4>
          Unidad de Almacenamiento
          <br>
          <small>Heladera <span class="caret"></span></small>
          </h4>
          </a>
          <div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">ProfileSubMenu1</a></li>
              <li><a href="#">ProfileSubMenu2</a></li>
              <li><a href="#">ProfileSubMenu3</a></li>
            </ul>
          </div>
       {{--  </li> --}}
        {{-- <li> --}}
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">Submenu1.1</a></li>
              <li><a href="#">Submenu1.2</a></li>
              <li><a href="#">Submenu1.3</a></li>
            </ul>
          </div>
        {{-- </li> --}}
        {{-- <li class="active"> --}}
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-inbox"></span> Submenu 2 <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">Submenu2.1</a></li>
              <li><a href="#">Submenu2.2</a></li>
              <li><a href="#">Submenu2.3</a></li>
            </ul>
          </div>
        {{-- </li> --}}
       {{--  <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Normalmenu</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li> --}}
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
    </div>{{-- </div> --}}
@endguest 
   
        <main class="py-4">
            @yield('content')
        </main>



    </div>

</body>
</html>


