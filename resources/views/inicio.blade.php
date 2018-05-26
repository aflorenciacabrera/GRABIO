@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- Título --}}
                <div class="card-header text-center"><h1>{{ __('Iniciar Sesión') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- Correo electronico  --}}
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- contraseña  --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Recordar  --}} 
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordar Usuario') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- Botón de acceso  --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Acceso') }}
                                </button>
                                {{-- Recuperar contraseña  --}}
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Ha olvidado su contraseña?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Panel de botones --}}
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="col-md-12 col-md-offset-3">
                    {{-- Responsable --}}
                    <a class="btn btn-info active btn-lg" role="button" href="{{ url('') }}">
                        <img src="{{asset('img/.png')}}" width="100" /><br>
                        <span class="label label-default">Responsable </span> </a>
                    {{-- Investigador--}}
                    <a class="btn btn-warning active btn-lg" type="button" href="{{ url('')}}">
                        <img src="{{asset('img/.png')}}" width="100" /><br>
                    <span class="label label-default">Investigador </span> </a>
                    {{-- Técnico --}}
                    <a class="btn btn-danger active btn-lg" type="button"  href="{{ url('') }}"> 
                        <img src="{{asset('img/.png')}}" width="100" /><br>
                        <span class="label label-default">Técnico</span></a>
                    
                </div>
            </div>
        </div>
    </div>
    {{--Fin de Panel de Botones--}}
@endsection
