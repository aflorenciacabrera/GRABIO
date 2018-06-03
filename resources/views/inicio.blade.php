@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
                 {{-- Panel de botones --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="col-md-12 col-md-offset-4">
                                    {{-- Responsable --}}
                                    <a class="btn btn-info active btn-lg" role="button" href="{{ url('') }}">
                                        <img src="{{asset('img/images (2).jpg')}}" width="100" /><br>
                                        <span class="label label-default">Responsable </span> </a>
                                    {{-- Investigador--}}
                                    <a class="btn btn-warning active btn-lg" type="button" href="{{ url('')}}">
                                        <img src="{{asset('img/descarga (3).jpg')}}" width="100" /><br>
                                    <span class="label label-default">Investigador </span> </a>
                                    {{-- Técnico --}}
                                    <a class="btn btn-danger active btn-lg" type="button"  href="{{ url('') }}"> 
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
