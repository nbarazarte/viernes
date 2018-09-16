@extends('layouts.app1')

@section('content')

    <section class="p-0 bg-light">
      <div class="image image-overlay image-cover" style="background-image:url(template/assets/images/demo/minimal/image-12.jpg)"
      data-top-top="transform: translateY(0px);" 
      data-top-bottom="transform: translateY(-250px);"></div>
      <div class="container">
        <div class="row justify-content-center align-items-end vh-50 mb-5">
          <div class="col col-md-8">
            <div class="row align-items-center">
              <div class="col-10">
                 <div class="media align-items-center" style="background-color: red">
                   <img class="mr-3 avatar avatar-xl rounded" src="template/assets/images/banderas/Venezuela.jpg" alt="Bandera de Venezuela">
                   <div class="media-body">

                  <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModal">
                    Publicar
                  </button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                      <div class="modal-content">

                      {!! Form::open(['route' => 'MascotasPerdidas', 'method'=>'POST', 'id' => 'demo-form', 'name' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false', 'onsubmit' => '']) !!} 

                        <div class="modal-header justify-content-end"><!-- modal-header-->
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="icon-x"></span>
                          </button>
                        </div>

                        <div class="modal-body text-md-left">

                          <div class="form-group"> 
                            <h5 class="mb-0 text-center">Datos de la mascota</h5>


                            <select class="form-control form-control-sm" id="str_especie" name="str_especie" required>
                              <option>¿Qué tipo de mascota es?</option>
                              <option value="Perro">Perro</option>
                              <option value="Gato">Gato</option>
                            </select>       
                          </div>                          
            
                          <div class="form-group">                            
                            <input type="text" class="form-control form-control-sm" id="str_mascota" name="str_mascota" aria-describedby="" placeholder="¿Cómo se llama?" required>          
                          </div>

                          <div class="form-group">                            
                            <select class="form-control form-control-sm" id="str_ciudad" name="str_ciudad" required>
                              <option>¿En que ciudad se extravió?</option>
                              <option value="Caracas">Caracas</option>
                              <option value="Barquisimeto">Barquisimeto</option>
                              <option value="Maracay">Maracay</option>
                              <option value="Valencia">Valencia</option>
                            </select>       
                          </div>

                          <div class="form-group">                            
                            <input type="text" class="form-control form-control-sm" id="str_sector" name="str_sector" aria-describedby="" placeholder="Indica una zona o sector cercano" required>         
                          </div>

                          <div class="form-group">                            
                            <input type="text" class="form-control form-control-sm" id="str_fecha_perdida" name="str_fecha_perdida" aria-describedby="" placeholder="¿Cuándo se extravió?" required>          
                          </div>                            

                          <div class="form-group">
                            <textarea id="txt_descripcion" name="txt_descripcion" class="form-control form-control-sm" rows="3" placeholder="Describe lo más posible a tu mascota" required></textarea>        
                          </div>

                          <div class="form-group">
                            <span class="text-muted">Añade una foto reciente</span>
                            <input type="file" class="form-control-file form-control-sm" id="str_ruta" name="str_ruta" aria-describedby="" required>         
                          </div>

                          <div class="form-group">                  
                            <input type="number" class="form-control form-control-sm" id="str_telefono" name="str_telefono" aria-describedby="" placeholder="N° de teléfono de contacto" required>          
                          </div>                          

                        </div>

                        <div class="modal-footer">

                          <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="{{ Auth::user()->id }}" readonly="yes">
                          <input type="hidden" id="str_dueno" name="str_dueno" value="{{ Auth::user()->name }}" readonly="yes">
                          <input type="hidden" id="str_correo" name="str_corro" value="{{ Auth::user()->email }}" readonly="yes">

                          <button id="btnpmp" type="button" class="btn btn-sm btn-primary btn-rounded btn-block">Publicar</button>

                          <button type="submit" class="btn btn-sm btn-primary btn-rounded btn-block">Enviar</button>
                        </div>

                      {!! csrf_field() !!} 

                      {!! Form::close() !!}

                      </div>
                    </div>
                  </div>

                   </div>
                 </div>
              </div>
       
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light pt-2">

      <div class="container">
        <div class="tab-content" id="demo-2">

          <!-- tab connections -->
          <div class="tab-pane show active" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">

            <div id="nuevaPublicacion">

            @if(isset($datos))

              @foreach(array_reverse($datos) as $dato)

                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-8">
                    <div class="row gutter-1">

                      <div class="col-12">
                        <div class="boxed p-2">
                          <div class="row align-items-center justify-content-between">
                            <div class="col-10">
                              <div class="media align-items-center">
                                <img src="template/assets/images/demo/user-5.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                                <div class="media-body">
                                  <h5 class="mb-0">{{ $dato['str_mascota']  }} </h5>
                                  <span class="text-muted">{{ $dato['str_fecha_perdida']  }} </span>

                                    <p>{{ $dato['txt_descripcion']  }} </p>

                                </div>
                              </div>
                            </div>
                            <div class="col-2 text-md-right">
                              <div class="dropdown">
                                <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="settings.html#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-more-vertical fs-22"></i>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-3">
                                  <a class="dropdown-item" href="settings.html#">Make Primary</a>
                                  <a class="dropdown-item" href="settings.html#">Remove</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            
              @endforeach

            @endif

            </div>
     
          </div>
          <!-- / tab -->

        </div>
      </div>
    </section>



    <!-- footer -->
    <footer class="separator-top">
      <div class="container py-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 text-center text-md-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="settings.html#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="settings.html#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="settings.html#">Legal Information</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 text-center">
            <img class="logo-sm" src="template/assets/images/demo/logo/logo-dark.svg" alt="Logo">
          </div>
          <div class="col-md-5 text-center text-md-right">
            <ul class="socials">
              <li><a href="settings.html" class="icon-facebook text-facebook fs-20"></a></li>
              <li><a href="settings.html" class="icon-instagram text-instagram fs-20"></a></li>
              <li><a href="settings.html" class="icon-twitter text-twitter fs-20"></a></li>
              <li><a href="settings.html" class="icon-linkedin text-linkedin fs-20"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->


@endsection