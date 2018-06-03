@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="container">
        <div class="panel panel-default">
              <div class="col-md-20  text-center"> <label class="control-label "><h3>Registrar </h3></label>
              </div>
          </div> 
        </div>
      
                 {{-- Panel de botones --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="col-md-12 col-md-offset-4">
                                    {{-- Responsable --}}
                                    <a class="btn btn-info active btn-lg" role="button" href="{{ route('register') }}">
                                        <img src="{{asset('img/images (2).jpg')}}" width="100" /><br>
                                        <span class="label label-default">Responsable </span> </a>
                                    {{-- Investigador--}}
                                    <a class="btn btn-warning active btn-lg" type="button" href="{{ route('register') }}">
                                        <img src="{{asset('img/descarga (3).jpg')}}" width="100" /><br>
                                    <span class="label label-default">Investigador </span> </a>
                                    {{-- Técnico --}}
                                    <a class="btn btn-danger active btn-lg" type="button"  href="{{ route('register') }}"> 
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
