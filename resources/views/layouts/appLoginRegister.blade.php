<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    

    <!-- Libs CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('templateDashkit/assets/fonts/feather/feather.min.css') !!}

    <!-- Theme CSS -->
    <!-- Values are "toggle", "light", and "dark". See "Getting Started" for more information -->
    <!-- Toggle Mode: For demo only, but allows a user to seamlessly toggle between light/dark modes -->

    <link href="{{ asset('templateDashkit/assets/css/theme-dark.min.css') }}" rel="" data-toggle="theme" data-theme-mode="dark">
    <link href="{{ asset('templateDashkit/assets/css/theme.min.css') }}" rel="" data-toggle="theme" data-theme-mode="light">

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

    {!! Html::script('https://www.google.com/recaptcha/api.js') !!}
    
  </head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary" style="background-image: url({{ asset('templateDashkit/assets/img/covers/login.jpg') }}); background-repeat: no-repeat;">

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
    {!! Html::script('js/app.js') !!}
    {!! Html::script('templateDashkit/assets/libs/chart.js/dist/Chart.min.js') !!}
    {!! Html::script('templateDashkit/assets/libs/chart.js/Chart.extension.min.js') !!}

    <!-- Theme JS -->
    {!! Html::script('templateDashkit/assets/js/theme.min.js') !!}

  </body>
</html>