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

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                
                <input id="email" type="email" class="form-control" name="email" placeholder="nombre@ejemplo.com" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
               
            </div>

            <div class="form-group">
                
                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                    Enviar la nueva clave a mi correo
                </button>
                
            </div>
        </form>

    <br>
</div>

@endsection
