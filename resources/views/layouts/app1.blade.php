<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pruebas descripción"><!-- cambiar esto -->

    <meta property="og:url"           content="{{ config('app.url', 'ejemplo.com') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:description"   content="Pruebas descripción" /><!-- cambiar esto -->
    <meta property="og:image"         content="" />    
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {!! Html::style('template/assets/css/vendor.css') !!}
    {!! Html::style('template/assets/css/style.css') !!}

    <!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>
  <body>

 <!-- header -->
    <header class="sticky-top header-light bg-white"><!-- header-sticky -->
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ route('welcome')}}">
            <img class="navbar-logo navbar-logo-light" src="template/assets/images/demo/logo/guauser.png" alt="Logo">
            <img class="navbar-logo navbar-logo-dark" src="template/assets/images/demo/logo/guauser.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}" role="button">
                  Inicio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('servicios')}}" role="button">
                  Servicios
                </a>
              </li>              
              
            </ul>

          @guest

              <ul class="navbar-nav align-items-center mr-0">
                <li>
                  <a class="nav-link" href="{{ route('login')}}" >
                    Iniciar Sesión <i class="fas fa-paw fs-22"></i>
                  </a>

                </li>
              </ul>

          @else

              <ul class="navbar-nav align-items-center mr-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                     

                      @if(empty(Auth::user()->avatar))
                        
                       <img src="templateDashkit/assets/img/avatars/profiles/user.png" alt="Avatar" class="avatar avatar-login rounded">
                        
                      @else

                        <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="avatar avatar-login rounded">  
        
                      @endif
                    
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi Cuenta</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Configuración</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>

                  </div>

                </li>
              </ul>

            @endguest

          </div>
        </nav>
      </div>
    </header>
    <!-- header -->

    @yield('content')


    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2>Subscribe to get best offers.</h2>
            <form class="form form-cta mt-3">
              <div class="form-group">
                <div class="row gutter-1">
                  <div class="col-8">
                    <input type="email" class="form-control form-control-rounded px-4" id="exampleInputEmail1" placeholder="Insert your email">
                  </div>
                  <div class="col-4">
                    <button type="submit" class="btn btn-white btn-rounded btn-block">Subscribe</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="separator-top">
        <div class="container py-5">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-5 text-center text-md-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="##">Contacts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="##">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="##">Legal Information</a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 text-center">
              <img class="logo-sm" src="template/assets/images/demo/logo/logo-light.svg" alt="Logo">
            </div>
            <div class="col-md-5 text-center text-md-right">
              <ul class="socials">
                <li><a href="#" class="icon-facebook fs-20"></a></li>
                <li><a href="#" class="icon-instagram fs-20"></a></li>
                <li><a href="#" class="icon-twitter fs-20"></a></li>
                <li><a href="#" class="icon-linkedin fs-20"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->



    

    {!! Html::script('template/assets/js/vendor.js') !!}
    {!! Html::script('template/assets/js/app.js') !!}
    <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
  <!-- Load Facebook SDK for JavaScript -->

    <div id="fb-root"></div>
  
    <script>
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=923879157809752&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>    

    @if (Route::current()->getName() == 'welcome')
      <script src="https://www.gstatic.com/firebasejs/5.5.0/firebase.js"></script>
 
      {!! Html::script('template/assets/js/custom.js') !!}
    @endif
  </body>
</html>