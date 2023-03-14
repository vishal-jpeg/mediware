<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/custom_img/cardio.png" alt=""  class="d-inline-block align-text-center">
      <span class="text-primary">Medi</span>-Ware
    </a>
            
            <ul class="navbar-nav navbar-nav-right">
              
              <li class="nav-item active d-none d-lg-block">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{url('camp')}}">Camps</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="#" >Schemes</a>
              </li>

              @if(Route::has('login'))

              @auth
                <x-app-layout>
                    
                </x-app-layout>
              @else

              <li class="nav-item ">
                <a class="btn btn-primary ml-lg-3"  href="{{route('login')}}" >Login</a>
              </li>

              <li class="nav-item ">
                <a class="btn btn-primary ml-lg-3"  href="{{route('register')}}" >Register</a>
              </li>

              @endif

              @endauth
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>