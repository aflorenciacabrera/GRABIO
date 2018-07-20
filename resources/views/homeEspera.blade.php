@extends('layouts.app')
 @section('content')    

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h4>Acceso en Espera</h4></div>

                <div class="card-body text-center ">
					<p>Tu usuario ha sido registrado con éxito.</p>
                	 <div class="col-md-offset-4"><img src="{{asset('img/images (3).jpg')}}" class="img-rounded img-responsive" /> </div>
                	<p> El administrador del sitio evaluará tu solicitud y realizará el alta definitiva. Te avisaremos con un correo electrónico.</p>
                	 </div>
              </div>
          </div>

       </div>
     </div>
 
@endsection