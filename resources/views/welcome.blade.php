@extends('layouts.app2')

@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      <!-- HEADER -->
      <div class="header bg-dark">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-5.jpg" alt="Second slide">
            </div>                      
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container mt--6">

        <div class="row">
          <div class="col-12 col-lg-6 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Budget
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>

                    <!-- Badge -->
                    <span class="badge badge-soft-success mt--1">
                      +3.5%
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Total Hours
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
              
          </div>
          <div class="col-12 col-lg-6 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Progress
                    </h6>

                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">

                        <!-- Heading -->
                        <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>
                        
                      </div>
                      <div class="col">
                        
                        <!-- Progress -->
                        <div class="progress progress-sm">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
              
          </div>
          <div class="col-12 col-lg-6 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Effective Hourly
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $85.50
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-clock text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
              
          </div>
        </div> <!-- / .row -->
        <div class="row">

          <!-- Servicios -->
          <div class="col-12 col-xl-3">

              <div class="card">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      
                      <select class="form-control form-control-sm" data-toggle="select">
                        <option>Caracas</option>
                        <option>Maracay</option>
                        <option>Valencia</option>
                        <option>Barquisimeto</option>
                        <option>Puerto La Cruz</option>
                        <option>San Cristóbal</option>
                        <option>Maracaibo</option>
                        <option>Puerto Ordaz</option>
                        <option>Puerto Ayacucho</option>
                        <option>Merida</option>
                      </select>
                    </h4>

                  </div>

                </div> <!-- / .row -->
              </div>

              <div class="card">
                
                <div data-toggle="lists" data-lists-values='["name"]'>

                  <div class="card-header">

                    <form>
                      <div class="input-group input-group-flush input-group-merge">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Buscar Servicio">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-search"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>

                  <ul class="list-group list">
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Jaennie Pineda">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Programador Web</a>
                          </h6>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> En línea
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Rosciel Granadillo">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Maquilladora</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-danger">●</span> Off
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Angela Pérez">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Diseñador Gráfico</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Julio Gonzáles">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Abogado</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Marlon Bracamonte">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Moto Taxista</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Danilo Ribas">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Estilista</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Maritza Aché">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Costurera</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Jesús Céspedes">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Plomero</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          
                          <!-- Avatar -->
                          <a href="#!" class="avatar">
                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" title="Jóse Yépez">
                          </a>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h5 class="mb-1 name">
                            <a href="#!">Moto Taxista</a>
                          </h5>

                          <!-- Time -->
                          <p class="small mb-0">
                            <span class="text-success">●</span> On
                          </p>
                          
                        </div>
                        <div class="col-auto">
                          
                          <!-- Button -->
                          <a href="#!" class="btn btn-sm btn-white" title="Contactar">
                            <span class="fe fe-message-circle"></span>
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </li>                                                                                                                                                       
                  </ul>
                 
                </div>
              </div>            
                     
          </div>

          <!-- Time Line -->
          <div class="col-12 col-xl-6">
                        
            <div class="card">
              <div class="card-body">
                       
              @guest
                <div id="btnpmp"></div>
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
                            <input type="file" id="logo" name="logo" class="custom-file-input" id="catagry_logo">
                            
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
                      <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-center" role="alert">
                        
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
        
                            <p class="text-center mb-3">
                              <img src="storage/{{ $dato['archivo'] }}" alt="..." class="img-fluid rounded">
                            </p>                             

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

          <!-- Eventos -->
          <div class="col-12 col-xl-3">

            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Eventos para hoy
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="#!" class="small">Ver todos</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col-auto">
                    
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar avatar-4by3">
                      <img src="templateDashkit/assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Homepage Redesign</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24">Updated 5hr ago</time>
                    </p>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar avatar-4by3">
                      <img src="templateDashkit/assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Travels & Time</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24">Updated 3hr ago</time>
                    </p>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar avatar-4by3">
                      <img src="templateDashkit/assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Safari Exploration</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24">Updated 10hr ago</time>
                    </p>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    
                    <!-- Avatar -->
                    <a href="project-overview.html" class="avatar avatar-4by3">
                      <img src="templateDashkit/assets/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="project-overview.html">Personal Site</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      <time datetime="2018-05-24">Updated 4hr ago</time>
                    </p>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div> <!-- / .row -->

              </div> <!-- / .card-body -->
            </div> <!-- / .card -->        

          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .main-content -->

@endsection    