@extends('layouts.app1')

@section('content')

    <!-- cover -->
    <section class="hero hero-with-header section-decorated-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <span class="eyebrow mb-1 text-primary">Ready for adventure ?</span>
            <h1 class="display-2"><b>Book a travel</b> with us.</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row gutter-1">
              <div class="form-group col-md-5">
                <input type="email" class="form-control-lg form-control" id="inputEmail4" placeholder="Destination">
              </div>
              <div class="form-group col-md-5">
                <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                  <option>One Week</option>
                  <option>Two Weeks</option>
                  <option>One Month</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <a href="#" class="btn btn-lg btn-block btn-primary">Search</a>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>
    <!-- / cover -->


    <!-- destinations carousel -->
    <section class="section-decorated-bottom pt-0">
      <div class="decorated-bottom text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row" data-aos="fade-left" data-aos-delay="500">
          <div class="col">
            <div class="owl-carousel visible" data-items="[3,2,1]" data-margin="20" data-dots="true" data-loop="true" data-center="true">

              <article class="tile tile-long">
                <div class="tile-image" style="background-image: url(template/assets/images/demo/travel/jornadasSalud.jpg)"></div>
                <a href="#" class="tile-content">
                  <div class="tile-header on-hover text-right">
                    
                  </div>
                  <div class="tile-footer">
                    
                    <h3>Salud</h3>
                  </div>
                </a>
              </article>
              <article class="tile tile-long">
                <div class="tile-image" style="background-image: url(template/assets/images/demo/travel/jornadasAdopcion.jpg)"></div>
                <a href="#" class="tile-content">
                  <div class="tile-header on-hover text-right">
                    
                  </div>
                  <div class="tile-footer">
                    
                    <h3>Adopción</h3>
                  </div>
                </a>
              </article>
              <article class="tile tile-long">
                <div class="tile-image" style="background-image: url(template/assets/images/demo/travel/taxiMascotas2.jpg)"></div>
                <a href="#" class="tile-content">
                  <div class="tile-header on-hover text-right">
                    
                  </div>
                  <div class="tile-footer">
                    
                    <h3>Taxis para Mascotas</h3>
                  </div>
                </a>
              </article>
              <article class="tile tile-long">
                <div class="tile-image" style="background-image: url(template/assets/images/demo/travel/Historias.jpg)"></div>
                <a href="#" class="tile-content">
                  <div class="tile-header on-hover text-right">
                    
                  </div>
                  <div class="tile-footer">
                    
                    <h3>Historias</h3>
                  </div>
                </a>
              </article>
              <article class="tile tile-long">
                <div class="tile-image" style="background-image: url(template/assets/images/demo/travel/mascotasPerdidas.jpg)"></div>
                <a href="#" class="tile-content">
                  <div class="tile-header on-hover text-right">
                    
                  </div>
                  <div class="tile-footer">
                    
                    <h3>Mascotas Perdidas</h3>
                  </div>
                </a>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / destinations carousel -->


    <!-- about -->
    <section class="bg-light pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row separator-bottom pb-5 mb-5">
              <div class="col">
                <h2>Plan your awesome <br><b>adventure</b> today.</h2>
              </div>
              <div class="col">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quod quasi non nostrum nobis laudantium pariatur enim nihil animi, iusto est, ea dignissimos? Voluptas rem, necessitatibus sed sint adipisci nulla!</p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>What type of ticket should I choose ?</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>Informations about visa requirements</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-2 mt-md-0">
                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>What type of ticket should I choose ?</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion data-aos="fade-up">
                    <div class="accordion-control" data-control>
                      <h5>Informations about visa requirements</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
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
    <!-- / about -->


    <!-- featured carousel -->
    <section class="bg-light pb-0">
      <div class="container-fluid">
        <div class="row" data-aos="fade-up">
          <div class="col">
            <div class="gallery">
              <div class="gallery-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="image image-zoom image-overlay-dark" style="background-image:url(template/assets/images/demo/travel/travel-9.jpg)">
                    </div>
                    <div class="caption text-white" data-swiper-parallax="-100%">
                      <div class="container">
                        <div class="row align-items-center justify-content-center vh-50">
                          <div class="col text-center">
                            <span class="eyebrow">Santorini, Greece</span>
                            <h1 class="display-3"><b>Mediterannian</b> Ressort & Spa</h1>
                            <a href="#" class="btn btn-outline-white btn-rounded">Learn More</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image image-overlay-dark image-scrolling" style="background-image:url(template/assets/images/demo/travel/travel-7.jpg)"
                    data--100-bottom-top="transform: translateY(0%);" 
                    data-top-bottom="transform: translateY(25%);">
                    </div>
                    <div class="caption text-white" data-swiper-parallax="-100%">
                      <div class="container">
                        <div class="row align-items-center vh-75">
                          <div class="col-md-8 col-lg-6">
                            <span class="eyebrow">California, USA</span>
                            <h1 class="display-3 mb-1">Catch Your Wave</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quibusdam mollitia iure ullam quo quidem fuga aliquam, non pariatur, </p>
                            <a href="#" class="btn btn-white btn-rounded mt-2 px-5">Purchase</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image image-overlay-dark image-scrolling" style="background-image:url(template/assets/images/demo/travel/travel-8.jpg)"
                    data--100-bottom-top="transform: translateY(0%);" 
                    data-top-bottom="transform: translateY(25%);">
                    </div>
                    <div class="caption text-white" data-swiper-parallax="-100%">
                      <div class="container">
                        <div class="row align-items-center vh-50">
                          <div class="col">
                            <span class="eyebrow">Outstanding Iceland Adventures</span>
                            <h1 class="display-3">Mediterannian <br>Ressort & Spa</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <h5>California, USA</h5>
                  </div>
                  <div class="swiper-slide">
                    <h5>Reykjavik, Iceland</h5>
                  </div>
                  <div class="swiper-slide">
                    <h5>Barcelona, Spain</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / featured carousel -->


    <!-- testimonials -->
    <section class="bg-light section-decorated-bottom">
      <div class="decorated-bottom text-primary">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-4 text-center text-lg-left">
            <h2>Our travels are <b>about</b> <i>emotions.</i></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-rounded btn-with-ico btn-primary mt-2">Write a review  <i class="icon-edit-2"></i></button>
          </div>
          <div class="col-lg-7 blockquote-list">
            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
              <footer class="blockquote-footer">Michael Doe</footer>
            </blockquote>
            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
              <footer class="blockquote-footer">Michael Doe</footer>
            </blockquote>
            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
              <footer class="blockquote-footer">Michael Doe</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <!-- / testimonials -->


    <!-- features -->
    <section class="bg-primary section-decorated-bottom">
      <div class="decorated-bottom text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-7">
            <ul class="masonry row gutter-2" data-columns="2">
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-weather_sun fs-50 mb-2"></i>
                  <h4>Weather</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 mt-5" data-aos="fade-up">
                <div class="boxed p-4">
                  <i class="icon-basic_globe fs-50 mb-2 text-primary"></i>
                  <h4>Savings</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-ecommerce_cart_content fs-50 mb-2"></i>
                  <h4>Shopping</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-basic_clockwise fs-50 mb-2"></i>
                  <h4>Quick</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 text-white">
            <h2><b>Exclusive offers</b> from our partner hotels.</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- / features -->



    <!-- video -->
    <section class="bg-light separator-bottom">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 pl-md-5 text-center text-md-left">
            <span class="eyebrow text-primary mb-1">Special for you</span>
            <h2 class="mb-2"><b>Air Baloon</b> Festival</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore, inventore accusamus odio</p>
            <a href="#" class="btn btn-primary btn-rounded">Book Now</a>
          </div>
          <div class="col-md-7" data-aos="zoom-in">
            <video
              poster="template/assets/images/demo/travel/travel-10.jpg"
              id="video"
              class="youtube video-js vjs-default-skin video-16-9"
              controls
              width="640" height="264"
              data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=DkeiKbqa02g"}], "youtube": { "ytControls": 2 } }'
            >
            </video>
          </div>
        </div>
      </div>
    </section>
    <!-- / video -->



    <!-- blog -->
    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>Latest News</h2>
          </div>
        </div>
        <div class="row gutter-0">
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <article class="bordered bg-white rising p-4">
              <a href="#" class="eyebrow mb-2 text-primary">Travel Stories</a>
              <h3><a href="#" class="text-black">Starting Guide for a newbie traveller</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-sm btn-rounded btn-outline-primary mt-2">Learn More</a>
            </article>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
            <article class="bordered bg-white rising p-4">
              <a href="#" class="eyebrow mb-2 text-primary">Travel Stories</a>
              <h3><a href="#" class="text-black">Starting Guide for a newbie traveller</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-sm btn-rounded btn-outline-primary mt-2">Learn More</a>
            </article>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <article class="bordered bg-white rising p-4">
              <a href="#" class="eyebrow mb-2 text-primary">Travel Stories</a>
              <h3><a href="#" class="text-black">Starting Guide for a newbie traveller</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-sm btn-rounded btn-outline-primary mt-2">Learn More</a>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- / blog -->

@endsection
