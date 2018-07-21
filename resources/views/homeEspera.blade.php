@extends('layouts.app')
 @section('content')    

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h2>Acceso en Espera</h2></div>

                <div class="card-body text-center ">
                   @if(Session::has('activacion'))     
					<div class="alert alert-success text-center"><p><h4><strong>Tu usuario ha sido registrado con éxito.</strong> </h4></p></div>
                	 <div class="col-md-offset-4"><img src="{{asset('img/images (3).jpg')}}" class="img-rounded img-responsive" /> </div>
                	  
                        <div class="alert alert-danger  text-center" role="alert">
                          {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> --}}
                           <h4> <span>{{Session::get('activacion')}}</span> </h4>
                            
                       </div>
                       @else 
                       <div class="col-md-offset-3"><img src="{{asset('img/stop-stealing-contents.jpg')}}" class="img-rounded img-responsive" /> </div>
                       <div class="alert alert-danger  text-center" role="alert">
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> --}}
                           <h4> <span>Su cuenta aun no ha sido activada, Se le enviara con un correo electrónico.</span> </h4>
                            
                       </div> 
                    @endif
                	{{-- <p> El administrador del sitio evaluará tu solicitud y realizará el alta definitiva. Te avisaremos con un correo electrónico.</p> --}}
                	 </div>
              </div>
          </div>
{{--  --}}
       </div>
     </div>
 
@endsection