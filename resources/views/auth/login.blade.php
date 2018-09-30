@extends('layouts.appLoginRegister')

@section('content')

<div class="container">
	<br>

 	<!-- Heading -->
      <h1 class="display-4 text-center mb-3">
        Iniciar Sesión
      </h1>
          
      <!-- Subheading -->
      <p class="text-muted text-center mb-5">
       Ir a <a href="{{ route('welcome') }}">Guauser</a> la red social que te conecta.
      </p>
      
      <!-- Form -->
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      	{{ csrf_field() }}

	       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	         
	            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required autofocus>

	            @if ($errors->has('email'))
	                <span class="help-block">
	                    <strong>{{ $errors->first('email') }}</strong>
	                </span>
	            @endif
	            
	        </div>

	        <!-- Password -->
	        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

	          <div class="row">
	            <div class="col">
	                  

	            </div>
	            <div class="col-auto">
	              
	              <!-- Help text -->
	              <a class="btn btn-link" href="{{ route('password.request') }}">
	                Recuperar mi Clave
	              </a>

	            </div>
	          </div> <!-- / .row -->

	          <!-- Input group -->
	          <div class="input-group input-group-merge">

	            <!-- Input -->
				<input id="password" type="password" class="form-control" name="password" placeholder="Clave" required>

	            @if ($errors->has('password'))
	                <span class="help-block">
	                    <strong>{{ $errors->first('password') }}</strong>
	                </span>
	            @endif

	            <!-- Icon -->
	            <div class="input-group-append">
	              <span class="input-group-text">
	                <i class="fe fe-eye"></i>
	              </span>
	            </div>

	          </div>
	        </div>

        <!-- Submit -->
        <button class="btn btn-lg btn-block btn-primary mb-3">
          Iniciar Sesión
        </button>

        <hr>

		<div class="form-group">

            <div class="d-flex justify-content-center">Tambien puedes iniciar seción con:</div>

            <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                <a href="/login/twitter" class="btn btn-primary btn-sm" style="background-color: #00acee">
                    <i class="icon-twitter"></i> Twitter
                </a>
                <a href="/login/facebook" class="btn btn-primary btn-sm" style="background-color: #3b5998">
                    <i class="icon-facebook"></i> Facebook
                </a>

                <a href="/login/google" class="btn btn-primary btn-sm" style="background-color: #db4a39">
                    <i class="icon-google"></i> Google
                </a> 

            </div>
                
        </div>

        <!-- Link -->
        <div class="text-center">
          <small class="text-muted text-center">
            ¿No tienes una cuenta? <a href="{{ route('register')}}">Crear Cuenta</a>.
          </small>
        </div>
        
      </form>

	<br>
</div>

@endsection