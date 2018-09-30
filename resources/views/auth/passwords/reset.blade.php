@extends('layouts.appLoginRegister')

@section('content')

<div class="container">
  <br>

  <!-- Heading -->
      <h1 class="display-4 text-center mb-3">
        Recuperar Clave
      </h1>
          
      <!-- Subheading -->
      <p class="text-muted text-center mb-5">
       Ir a <a href="{{ route('welcome') }}">Guauser</a> la red social que te conecta.
      </p>
      
      <!-- Form -->
      <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
          {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     
          <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="nombre@ejemplo.com" required autofocus>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
            
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    
          <input id="password" type="password" class="form-control" name="password" placeholder="Clave" required>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
            
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                       
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Clave" required>

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
            
        </div>

        <div class="form-group">
          <button class="btn btn-lg btn-block btn-primary mb-3">
            Guardar Clave
          </button>
        </div>                        

      </form>

  <br>
</div>

@endsection