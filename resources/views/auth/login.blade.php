@extends('layouts.app1')

@section('content')

    <div class="viewport">
      <div class="image image-overlay" style="background-image:url(template/assets/images/demo/login.jpg)"></div>
      <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col-md-6 col-lg-5">
            <div class="accordion-group accordion-group-portal" data-accordion-group>
              <div class="accordion open" data-accordion>
                <div class="accordion-control" data-control>
                  <h5>Iniciar Sesión</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">


                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}

                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Correo Electrónico</label>
                    
                            <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Clave de Acceso</label>
                            
                            <input id="password" type="password" class="form-control form-control-sm" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-group">        
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>                            
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-rounded btn-sm">
                            Iniciar Sesión
                        </button>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Recuperar mi Clave
                            </a>
                        </div>
                    
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

                    </form>

                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion>
                <div class="accordion-control" data-control>
                  <h5>Crear Cuenta</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nombre</label>
                        
                            <input id="name" type="text" class="form-control form-control-sm" name="name" value="{{ old('name') }}" placeholder="Pedro Pérez" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Correo Electrónico</label>
                    
                            <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Clave de Acceso</label>
                         
                            <input id="password" type="password" class="form-control form-control-sm" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmar Clave</label>

                            <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required>
                            
                        </div>

                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-primary btn-block btn-rounded btn-sm">
                                Crear Cuenta
                            </button>
                            
                        </div> 

                        <div class="d-flex justify-content-center">Tambien te puedes registrar con:</div>

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

                    </form>







                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
