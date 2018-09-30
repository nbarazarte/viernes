<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    

    <!-- Libs CSS -->
    {!! Html::style('templateDashkit/assets/fonts/feather/feather.min.css') !!}
    {!! Html::style('templateDashkit/assets/libs/highlight/styles/vs2015.min.css') !!}
    {!! Html::style('templateDashkit/assets/libs/quill/dist/quill.core.css') !!}
    {!! Html::style('templateDashkit/assets/libs/select2/dist/css/select2.min.css') !!}
    {!! Html::style('templateDashkit/assets/libs/flatpickr/dist/flatpickr.min.css') !!}

    <!-- Theme CSS -->
    <!-- Values are "toggle", "light", and "dark". See "Getting Started" for more information -->
    <!-- Toggle Mode: For demo only, but allows a user to seamlessly toggle between light/dark modes -->

    @if( Route::currentRouteName() == 'password.request')

      <link href="../templateDashkit/assets/css/theme-dark.min.css" rel="" data-toggle="theme" data-theme-mode="dark">
      <link href="../templateDashkit/assets/css/theme.min.css" rel="" data-toggle="theme" data-theme-mode="light">

    @elseif(Route::currentRouteName() == 'password.reset')

      <link href="../../templateDashkit/assets/css/theme-dark.min.css" rel="" data-toggle="theme" data-theme-mode="dark">
      <link href="../../templateDashkit/assets/css/theme.min.css" rel="" data-toggle="theme" data-theme-mode="light">

    @else

      <link href="templateDashkit/assets/css/theme-dark.min.css" rel="" data-toggle="theme" data-theme-mode="dark">
      <link href="templateDashkit/assets/css/theme.min.css" rel="" data-toggle="theme" data-theme-mode="light">

    @endif

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  @if( Route::currentRouteName() == 'password.request')

    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary" style="background-image: url(../templateDashkit/assets/img/covers/login.jpg);background-repeat: no-repeat;">

  @elseif(Route::currentRouteName() == 'password.reset')

    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary" style="background-image: url(../../templateDashkit/assets/img/covers/login.jpg);background-repeat: no-repeat;">

  @else

     <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary" style="background-image: url(templateDashkit/assets/img/covers/login.jpg);background-repeat: no-repeat;">

  @endif

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5" style="background-color: white">
          
         @yield('content')

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    
    <!-- Libs JS -->
    {!! Html::script('templateDashkit/assets/libs/jquery/dist/jquery.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/chart.js/dist/Chart.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/chart.js/Chart.extension.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/highlight/highlight.pack.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/flatpickr/dist/flatpickr.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/list.js/dist/list.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/quill/dist/quill.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/dropzone/dist/min/dropzone.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/select2/dist/js/select2.min.js') !!}

    <!-- Theme JS -->
    {!! Html::script('templateDashkit/assets/js/theme.min.js') !!}

  </body>
</html>