@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Ingreso de Muestra') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{url('muestra/ingreso')}}">
                        @csrf

{{-- <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade  in active">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade  in active">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div> --}}

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Nombre:</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> tipo:</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="tipo" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> </label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="" value="" required autofocus>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Aceptar') }}
                            </button>
                            <span class="pull-right">                        
                            <a href="{{ url('/paciente') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button" type="button" class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                            </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection