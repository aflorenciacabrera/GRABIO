@extends('layouts.app')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<!------ Include the above in your HEAD tag ---------->

<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
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
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4>
          Unidad de Almacenamiento
          <br>
          <small>Heladera <span class="caret"></span></small>
          </h4>
          </a>
          <div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">20°-Congelador</a></li>
              <li><a href="#">80°-Congelador</a></li>
              <li><a href="#">160°-Congelador</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-cloud"></span> Torre A <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">caja.1</a></li>
              <li><a href="#">caja.2</a></li>
              <li><a href="#">caja.3</a></li>
            </ul>
          </div>
        </li>
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-inbox"></span> Torre B  <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">caja.1</a></li>
              <li><a href="#">caja.2</a></li>
              <li><a href="#">caja.3</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Archivos</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Historial </a></li>
        <li><a href=""><span class="glyphicon glyphicon-cog"></span> Configuración</a></li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">
        <div class="container">
            
                <div class="page-header">
    <h3><span class="glyphicon glyphicon-th-list"></span> Navigation</h3>
</div>
<p></p>
            
        </div>
    </div>
</div>



@endsection