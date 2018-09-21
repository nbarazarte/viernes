<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pruebas descripción"><!-- cambiar esto -->

    <meta property="og:url"           content="{{ config('app.url', 'ejemplo.com') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:description"   content="Pruebas descripción" /><!-- cambiar esto -->
    <meta property="og:image"         content="" />   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="templateDashkit/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="templateDashkit/assets/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="templateDashkit/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="templateDashkit/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="templateDashkit/assets/libs/flatpickr/dist/flatpickr.min.css">

    {!! Html::style('template/assets/css/custom.css') !!}

    <!-- Theme CSS -->
    <!-- Values are "toggle", "light", and "dark". See "Getting Started" for more information -->
    <!-- Toggle Mode: For demo only, but allows a user to seamlessly toggle between light/dark modes -->
    
    <link href="templateDashkit/assets/css/theme-dark.min.css" rel="" data-toggle="theme" data-theme-mode="dark">
    <link href="templateDashkit/assets/css/theme.min.css" rel="" data-toggle="theme" data-theme-mode="light">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    

    <style>
      body { display: none; }
    </style>

    <script>
      var themeMode = (localStorage.getItem('dashkitThemeMode')) ? localStorage.getItem('dashkitThemeMode') : 'light';
      var themeFile = document.querySelector('[data-toggle="theme"][data-theme-mode="' + themeMode + '"]');

      // Enable stylesheet
      themeFile.rel = 'stylesheet';

      // Enable body content
      themeFile.addEventListener('load', function() {
        document.body.style.display = 'block';
      });
    </script>
     
    
    

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>

    <!-- TOPNAV
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand mr-auto" href="index.html">
          <img src="templateDashkit/assets/img/logo.svg" alt="..." class="navbar-brand-img">
        </a>

        <!-- Form -->
        <form class="form-inline mr-4 d-none d-lg-flex">
          <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

            <!-- Input -->
            <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fe fe-search"></i>
              </div>
            </div>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-card">
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list my--3">
                  <a href="team-overview.html" class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="templateDashkit/assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Airbnb
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>
                    
                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a href="team-overview.html" class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="templateDashkit/assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Medium Corporation
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>
                    
                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a href="project-overview.html" class="list-group-item px-0">

                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="templateDashkit/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Homepage Redesign
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a href="project-overview.html" class="list-group-item px-0">

                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="templateDashkit/assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Travels & Time
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a href="project-overview.html" class="list-group-item px-0">

                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="templateDashkit/assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Safari Exploration
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>
                    
                      </div>
                    </div> <!-- / .row -->
              
                  </a>
                  <a href="profile-posts.html" class="list-group-item px-0">
              
                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Carol Danvers
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-success">●</span> Online
                        </p>

                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a href="profile-posts.html" class="list-group-item px-0">

                    <div class="row align-items-center">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Ab Hadley
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-danger">●</span> Offline
                        </p>

                      </div>
                    </div> <!-- / .row -->
              
                  </a>
                </div>
          
              </div>
            </div> <!-- / .dropdown-menu -->

          </div>
        </form>

        <!-- User -->
        <div class="navbar-user">
      
          <!-- Dropdown -->
          <div class="dropdown mr-4 d-none d-lg-flex">
        
            <!-- Toggle -->
            <a href="dashboard-topnav.html#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon active">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                
                    <!-- Title -->
                    <h5 class="card-header-title">
                      Notifications
                    </h5>

                  </div>
                  <div class="col-auto">
                
                    <!-- Link -->
                    <a href="dashboard-topnav.html#!" class="small">
                      View all
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .card-header -->
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush my--3">
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">
              
                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Carol Danvers</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                  <a class="list-group-item px-0" href="dashboard-topnav.html#!">

                    <div class="row">
                      <div class="col-auto">
                    
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="templateDashkit/assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml--2">
                    
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong class="text-body">Grace Gross</strong> subscribed to you.
                        </div>

                      </div>
                      <div class="col-auto">

                        <small class="text-muted">
                          2m
                        </small>
                    
                      </div>
                    </div> <!-- / .row -->

                  </a>
                </div>
            
              </div>
            </div> <!-- / .dropdown-menu -->

          </div>

          @guest

            <ul class="navbar-nav align-items-center mr-0">
              <li>
                <a class="nav-link" href="{{ route('login')}}" >
                  Iniciar Sesión 
                </a>

              </li>
            </ul>

          @else  

          <!-- Dropdown -->
          <div class="dropdown">
        
            <!-- Toggle -->
            <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
              @if(empty(Auth::user()->avatar))
                
                <img src="templateDashkit/assets/img/avatars/profiles/user.png" alt="Avatar" alt="..." class="avatar-img rounded-circle">
                
              @else

                <img src="{{ Auth::user()->avatar }}" alt="Avatar" alt="..." class="avatar-img rounded-circle">

              @endif
              
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item">Mi Cuenta</a>
              <hr class="dropdown-divider">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
            </div>
        
          </div>

        @endguest          

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
          </form>

          <!-- Navigation -->
          @include('menu')

        </div>

      </div> <!-- / .container -->
    </nav>


  @yield('content')

    <!-- JAVASCRIPT
    ================================================== -->
    
    <!-- Libs JS -->
    <script src="templateDashkit/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="templateDashkit/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="templateDashkit/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="templateDashkit/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="templateDashkit/assets/libs/highlight/highlight.pack.min.js"></script>
    <script src="templateDashkit/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="templateDashkit/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="templateDashkit/assets/libs/list.js/dist/list.min.js"></script>
    <script src="templateDashkit/assets/libs/quill/dist/quill.min.js"></script>
    <script src="templateDashkit/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="templateDashkit/assets/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="templateDashkit/assets/js/theme.min.js"></script>


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