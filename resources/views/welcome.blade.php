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
      <div class="container mt--9">

        <div class="row">
          <div class="col-6 col-lg-6 col-xl">
            
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
          <div class="col-6 col-lg-6 col-xl">
            
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
          <div class="col-6 col-lg-6 col-xl">
            
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
          <div class="col-6 col-lg-6 col-xl">
            
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

          @desktop
              
            <div class="row">
              
              <!-- buscadorServicios -->
              @include('buscadorServicios')

              <!-- Time Line -->
              @include('timeLine')

              <!-- Eventos -->
              @include('eventos')

            </div>

          @elsedesktop

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Social" role="tab" aria-controls="home" aria-selected="true">Social</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Chat" role="tab" aria-controls="profile" aria-selected="false">Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Hot" role="tab" aria-controls="contact" aria-selected="false">Lo más hot</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="Social" role="tabpanel" aria-labelledby="home-tab">
                
                  <div class="row">
                    <!-- Time Line -->
                    @include('timeLine')
                  </div>
              </div>

              <div class="tab-pane fade" id="Chat" role="tabpanel" aria-labelledby="profile-tab">
                
                  <div class="row">
                    <!-- buscadorServicios -->
                    @include('buscadorServicios')
                  </div>

              </div>

              <div class="tab-pane fade" id="Hot" role="tabpanel" aria-labelledby="contact-tab">
                  
                  <div class="row">
                    <!-- Eventos -->
                    @include('eventos')
                  </div>

              </div>

            </div>
              
          @enddesktop

      </div> <!-- / .container -->

    </div> <!-- / .main-content -->

@endsection