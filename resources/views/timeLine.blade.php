          <div class="col-12 col-xl-6">
                        

            <div id="msjs"></div>

            <div class="card">
              <div class="card-body">
                       
              @guest
                <div id="btnpmp"></div>
                <div id="logo"></div>
                <div id="displayImagen"></div>
                <div id="cerrarDisplayImagen"></div>
                <div id="cargando">
                  <div class="d-flex justify-content-center">
                    <div class="loader loader-primary"></div>
                  </div>
                </div>
              @else

                <div class="mb-3">

                  <div class="row align-items-center">

                    <div class="col-auto">
                      
                      <a href="#!" class="avatar">                       

                        @if(empty(Auth::user()->avatar))
                          
                          <img src="templateDashkit/assets/img/avatars/profiles/user.png" alt="Avatar" alt="..." class="avatar-img rounded-circle">
                          
                        @else

                          <img src="{{ Auth::user()->avatar }}" alt="Avatar" alt="..." class="avatar-img rounded-circle">

                        @endif                        

                      </a>

                    </div>

                    <style>

                      .thumb {
                        height: 100px;
                        border: 1px solid #000;
                        margin: 10px 5px 0 0;
                      }
                    </style>
                    
                    <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="card-header-title">
                          <select id="categorias" name="categorias" class="form-control form-control-sm" data-toggle="select">
                            <option>Categorías</option>
                            <option>Entretenimiento</option>
                            <option>Tecnología</option>
                            <option>Noticias</option>
                            <option>Servicios</option>
                            <option>Política</option>
                            <option>Deportes</option>
                            <option>Religión</option>
                            <option>Economía</option>                            
                            <option>Mascotas</option>
                            <option>Salud</option>
                            <option>Sexo</option>
                            <option>Ninguna</option>
                          </select>
                        </h4>                       

                        <textarea id="txt_descripcion" name="txt_descripcion" class="form-control" placeholder="Di lo que quieras..." rows="4"></textarea>

                        <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="{{ Auth::user()->id }}" readonly="yes">
                        <input type="hidden" id="usuario" name="usuario" value="{{ Auth::user()->name }}" readonly="yes">                        
                        <input type="hidden" id="str_correo" name="str_corro" value="{{ Auth::user()->email }}" readonly="yes">
                        <input type="hidden" id="str_fecha_publicacion" name="str_fecha_publicacion" value="{{ date('d/m/Y') }}" readonly="yes"> 
                        <input type="hidden" id="avatar_usuario" name="avatar_usuario" value="{{ Auth::user()->avatar }}" readonly="yes">              
                           
                    </div>

                    <div class="col-auto">
                      
                        <a href="#!" class="btn btn-rounded-circle btn-primary btn-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          <span class="fe fe-corner-down-left"></span>
                        </a> 

                    </div>

                  </div>

                </div>

                <div class="collapse" id="collapseExample">
                  <div class="card card-body">  

                    <div class="col-12">
                                  
                        <div class="custom-file">

                          <form enctype="multipart/form-data" id="archivoForm" role="form" method="POST" action="" >
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="file" id="logo" name="logo" class="custom-file-input" accept="image/*, video/*">
                            
                          </form>

                          <label class="custom-file-label" for="customFile">
                            Añadir
                            <span class="fe fe-image" title="foto"></span>
                            <span class="fe fe-film" title="video"></span>
                          </label>
                        </div> 

                        <div id="displayImagen" class="card">
                          <div class="card-body">

                            <div class="row align-items-center">

                              <div class="col ml--2">

                                <div class="text-center">

                                    <button id="cerrarDisplayImagen" type="button" class="close" aria-label="Close" title="Quitar">
                                      <span aria-hidden="true">&times;</span>
                                    </button>          

                                  <div id="list"></div>
                                
                                </div>
                                
                              </div>

                            </div>

                          </div>
                        </div>

                    </div> 

                    <br>

                    <button id="btnpmp" type="button" class="btn btn-rounded btn-primary btn-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Publicar</button>

                  </div>
                </div>

                <div id="cargando">
                  <div class="d-flex justify-content-center">
                    <div class="loader loader-primary"></div>
                  </div>
                </div>

                <hr>
                @endguest

                    <!-- Inicio Nueva Publicación-->
                    <div id="msjNuevaspublicaciones" class="">
                      <div class="alert alert-info alert-dismissible fade show d-flex justify-content-center" role="alert">
                        
                        Hay&nbsp;<b id="contNuevaspublicaciones"> </b> <a id="leerMsj" href="#!">&nbsp;leer</a>
      
                      </div>
                    </div>                

                    <!-- Inicio todas las Publicaciones-->
                    <div id="publicaciones">

                    @if(isset($datos))

                      @foreach(array_reverse($datos) as $dato)

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                
                                <a href="#!" class="avatar">

                                   @if(empty($dato['avatar_usuario']))

                                    <img src="templateDashkit/assets/img/avatars/profiles/user.png" alt="Avatar" class="avatar-img rounded-circle">

                                  @else

                                     <img src="{{ $dato['avatar_usuario'] }}" alt="Avatar" class="avatar-img rounded-circle">

                                  @endif 

                                </a>

                              </div>
                              <div class="col ml--2">

                                <h4 class="card-title mb-1">
                                  {{ $dato['usuario']  }}
                                </h4>

                                <p class="card-text small text-muted">
                                  <span class="badge badge-light"> {{ $dato['str_categoria'] }}</span>
                                  <span class="fe fe-calendar"></span>
                                  {{ $dato['str_fecha_publicacion'] }} 
                                  
                                  <span class="fe fe-clock"></span>
                                    {{ $dato['str_hora'] }}
                                </p> 
                                
                              </div>
                              <div class="col-auto">
                                
                                <div class="dropdown">
                                  <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                      Action
                                    </a>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          @if( !empty($dato['archivo'] ))

                            <?php

                                $str = $dato['archivo'];
                                $file_type = substr($str,-4);
                              
                                switch($file_type) {
                                  case 'jpeg':
                                  case '.jpg':
                                  case '.png':
                                      $ruta = '<p class="text-center mb-3"><img src="storage/'.$dato['archivo'].'" alt="..." class="img-fluid rounded" style="max-width: 100%; height: auto;"></p>'; 
                                  break;
                                  case '.mp4':
                                      $ruta = '<div class="embed-responsive embed-responsive-16by9">';
                                      //$ruta +=   '<iframe class="embed-responsive-item" src="storage/'.$dato['archivo'].'" allowfullscreen></iframe>';
                                      $ruta .= '<video controls="controls" controlsList="nodownload" preload="metadata"><source src="storage/'.$dato['archivo'].'" type="video/mp4"></video>';
                                      $ruta .= '</div>';
                                  break;          
                                } 

                            ?>

                            {!! $ruta !!}                

                          @endif    

                          <p class="mb-3" style="text-align: justify;">
                            {{ $dato['txt_descripcion']  }}
                          </p>                          
                            
                          <div class="mb-3">
                            <div class="row">
                              <div class="col">

                                <a href="#!" class="btn btn-sm btn-white">
                                  <i class="far fa-smile"></i> 1
                                </a>

                                <a href="#!" class="btn btn-sm btn-white">
                                  <i class="far fa-angry"></i> 0
                                </a>                                

                              </div>

                              <div class="col-auto">
                              
                              </div>
                            </div> 
                          </div>

                          <hr>

                        @endforeach

                      @endif

                    </div>
                    <!-- Fin Nueva Publicación-->

              </div>

            </div>

          </div>