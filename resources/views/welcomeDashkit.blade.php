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
              <img class="d-block w-100" src="templateDashkit/assets/img/image-4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="templateDashkit/assets/img/image-4.jpg" alt="Second slide">
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

          <div class="col-12 col-xl-4">


              <div class="card-header">
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

            <!-- Servicios -->
            <section class="container">
              <div class="row">
                  <div class="">
                      
                      <ul id="tabsJustified" class="nav nav-tabs">
                          <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active">Taxis</a></li>
                          <li class="nav-item"><a href="" data-target="#motos" data-toggle="tab" class="nav-link small text-uppercase ">Moto Taxis</a></li>                          
                          <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase ">Hoteles</a></li>
                      </ul>
                      <br>

                      <div id="tabsJustifiedContent" class="tab-content">

                          <div id="home1" class="tab-pane fade active show">

                            <!-- Taxis -->
                            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product"]'>
                              <div class="card-header">
                                <div class="row align-items-center">
                                  <div class="col">

                                    <!-- Search -->
                                    <form class="row align-items-center">
                                      <div class="col-auto pr-0">
                                        <span class="fe fe-search text-muted"></span>
                                      </div>
                                      <div class="col">
                                          <input type="search" class="form-control form-control-flush search" placeholder="Buscar Taxi">
                                      </div>
                                    </form>
                                    
                                  </div>

                                </div> <!-- / .row -->
                              </div>
                              <div class="table-responsive">
                                <table class="table table-sm table-nowrap card-table">
                                  <thead>
                                    <tr>

                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-order">
                                          Nombre
                                        </a>
                                      </th>
                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-product">
                                          Estado
                                        </a>
                                      </th>
                                    </tr>
                                  </thead>

                                  <tbody class="list">
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Jaennie Pineda
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-success">●</span> Disponible
                                      </td>                      
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                                                                                                               
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Rosciel Granadillo
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-danger">●</span> Ocupado
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Angela Pérez
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-danger">●</span> Ocupado
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>


                                  </tbody>
                                </table>
                              </div>
                            </div> 

                          </div>

                          <div id="motos" class="tab-pane fade ">

                            <!-- Taxis -->
                            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product"]'>
                              <div class="card-header">
                                <div class="row align-items-center">
                                  <div class="col">

                                    <!-- Search -->
                                    <form class="row align-items-center">
                                      <div class="col-auto pr-0">
                                        <span class="fe fe-search text-muted"></span>
                                      </div>
                                      <div class="col">
                                          <input type="search" class="form-control form-control-flush search" placeholder="Buscar Moto Taxi">
                                      </div>
                                    </form>
                                    
                                  </div>

                                </div> <!-- / .row -->
                              </div>
                              <div class="table-responsive">
                                <table class="table table-sm table-nowrap card-table">
                                  <thead>
                                    <tr>

                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-order">
                                          Nombre
                                        </a>
                                      </th>
                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-product">
                                          Estado
                                        </a>
                                      </th>
                                    </tr>
                                  </thead>

                                  <tbody class="list">
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Raúl Pérez
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-success">●</span> Disponible
                                      </td>                      
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                                                                                                               
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Yeferson García
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-success">●</span> Disponible
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Carlos Gonzáles
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-danger">●</span> Ocupado
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>


                                  </tbody>
                                </table>
                              </div>
                            </div> 

                          </div>                          

                          <div id="profile1" class="tab-pane fade  ">

                            <!-- Hoteles -->
                            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product"]'>
                              <div class="card-header">
                                <div class="row align-items-center">
                                  <div class="col">

                                    <!-- Search -->
                                    <form class="row align-items-center">
                                      <div class="col-auto pr-0">
                                        <span class="fe fe-search text-muted"></span>
                                      </div>
                                      <div class="col">
                                          <input type="search" class="form-control form-control-flush search" placeholder="Buscar hoteles">
                                      </div>
                                    </form>
                                    
                                  </div>

                                </div> <!-- / .row -->
                              </div>
                              <div class="table-responsive">
                                <table class="table table-sm table-nowrap card-table">
                                  <thead>
                                    <tr>

                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-order">
                                          Hotel
                                        </a>
                                      </th>
                                      <th>
                                        <a href="orders.html#" class="text-muted sort" data-sort="orders-product">
                                          Estado
                                        </a>
                                      </th>
                                    </tr>
                                  </thead>

                                  <tbody class="list">
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group">
                                          <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Hippocampus Vacation Club
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-success">●</span> Disponible
                                      </td>                      
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                                                                                                               
                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="dashboard-topnav.html#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Marriot
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-danger">●</span> Ocupado
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="orders-order">
                                        <div class="avatar-group justify-content-end">
                                          <a href="dashboard-topnav.html#!" class="avatar avatar-xs" data-toggle="tooltip" title="">
                                            <img src="templateDashkit/assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                          </a>
                                          Dallas
                                        </div>
                                      </td>
                                      <td class="orders-product">
                                        <span class="text-success">●</span> Disponible
                                      </td>

                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a href="orders.html#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                            <a href="orders.html#!" class="dropdown-item">
                                              Contactar
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>


                                  </tbody>
                                </table>
                              </div>
                            </div> 

                          </div>

                      </div>

                  </div>
              </div>
            </section>

            <!-- Eventos -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Eventos de hoy
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

          <!-- Time Line -->
          <div class="col-12 col-xl-6">
                        
            <div class="card">
              <div class="card-body">
                       
              @guest

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

                    <div class="col ml--2">

                      <?php
                                          
                        setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
                        date_default_timezone_set('America/Caracas');
                        $tiempo = strftime("%X");

                      ?>                      

                        <textarea id="txt_descripcion" name="txt_descripcion" class="form-control" placeholder="Di lo que quieras..." rows="4" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></textarea>
                        <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="{{ Auth::user()->id }}" readonly="yes">
                        <input type="hidden" id="usuario" name="usuario" value="{{ Auth::user()->name }}" readonly="yes">                        
                        <input type="hidden" id="str_correo" name="str_corro" value="{{ Auth::user()->email }}" readonly="yes">
                        <input type="hidden" id="str_fecha_publicacion" name="str_fecha_publicacion" value="{{ date('d/m/Y') }}" readonly="yes"> 
                        <input type="hidden" id="avatar_usuario" name="avatar_usuario" value="{{ Auth::user()->avatar }}" readonly="yes">               
                        <input type="hidden" id="str_categoria" name="str_categoria" value="ninguna" readonly="yes">
                        <input type="hidden" id="str_hora" name="str_hora" value="{{ $tiempo }}" readonly="yes">
                         
                    </div>

                    <div class="col-auto">

                      <div class="d-flex justify-content-center">
                        <button id="btnpmp" type="button" class="btn btn-rounded btn-primary btn-sm">Publicar</button>
                      </div>                                            
                      
                    </div>
                  </div>
                </div>

                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <input type="file" class="form-control-file form-control-sm" id="str_ruta" name="str_ruta" aria-describedby="" required>
                  </div>
                </div>

                <hr>
                @endguest

                    <!-- Inicio Nueva Publicación-->
                    <div id="nuevaPublicacion">

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
                                  <span class="fe fe-clock"></span> 
                                  <time datetime="2018-09-20">
                                    {{ $dato['str_fecha_publicacion'] }} {{ $dato['str_hora'] }}
                                  </time>
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

                          <p class="mb-3" style="text-align: justify;">
                            {{ $dato['txt_descripcion']  }}
                          </p>                          
                            
                            @if( !empty($dato['str_ruta'] ))

                              <!--
                                <p class="text-center mb-3">
                                  <img src="{{ $dato['str_ruta'] }}" alt="..." class="img-fluid rounded">
                                </p>
                              -->

                              <p class="text-center mb-3">
                                <img src="templateDashkit/assets/img/posts/post-1.jpg" alt="..." class="img-fluid rounded">
                              </p>                             

                            @endif

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

                                <div class="d-flex justify-content-center">
                                  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world" data-size="default">Tweet</a>
        
                                  <div class="fb-share-button" data-href="http://solucionesbestoffice.com/Colorear-con-BestOffice" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsolucionesbestoffice.com%2FColorear-con-BestOffice%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>                                                    
                                </div>
                              
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

          <!-- Categorías -->
          <div class="col-12 col-xl-2">
                        
            <div class="card">
              <div class="card-body">

                <h2>Filtrar por:</h2>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
  
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Servicios <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: #386f00">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Variedades <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: #4a0093">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                   <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Política <small class="text-muted">
                     <span class="badge badge-warning">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>   

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Deportes <small class="text-muted">
                     <span class="badge badge-secondary">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Religión <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: #ff6c6c">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>                 
                
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Economía <small class="text-muted">
                     <span class="badge badge-info">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Moda <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: #ff2492">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr> 

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Mascotas <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: #2424ff">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Salud <small class="text-muted">
                     <span class="badge badge-success">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Sexo <small class="text-muted">
                     <span class="badge badge-dark" style="background-color: red">793</span>
                    </small></button>

                  </div>

                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>                                                                                                            

              </div>
            </div>

          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .main-content -->

@endsection    