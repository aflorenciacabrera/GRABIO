


<ul class="navbar-nav ml-auto navbar ">
    
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