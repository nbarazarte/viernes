@extends('layouts.app1')

@section('content')

    <!-- schedule -->
    <section class="bg-primary text-white">
      <div class="container-fluid">
        
        <div class="row" data-aos="fade-up">
          <div class="col col-md-6">
            <h2 class="text-decorated text-decorated-padding text-uppercase font-weight-bold">Eventos <br>del mes</h2>


          </div>
          <div class="col col-md-6 text-md-right ml-7 ml-sm-0">
            <a href="#" class="btn btn-rounded btn-white text-primary">Crear un evento</a>
          </div>
        </div>
        

        <div class="row">
          <div class="col">
            <div class="table-responsive-md">
              <table class="table table-bordered" data-aos="fade-up">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">M</th>
                    <th scope="col">T</th>
                    <th scope="col">W</th>
                    <th scope="col">T</th>
                    <th scope="col">F</th>
                    <th scope="col">S</th>
                    <th scope="col">S</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">8:00</th>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">Yoga</li>
                        <li class="list-group-item">Crossfit</li>
                      </ul>
                    </td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">Yoga</li>
                        <li class="list-group-item">Super Pump</li>
                      </ul>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">ABS</li>
                        <li class="list-group-item">Total Body</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9:00</th>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">Yoga</li>
                        <li class="list-group-item">Crossfit</li>
                      </ul>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">Yoga</li>
                        <li class="list-group-item">Super Pump</li>
                      </ul>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">11:20</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">ABS</li>
                        <li class="list-group-item">Total Body</li>
                      </ul>
                    </td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">ABS</li>
                        <li class="list-group-item">Total Body</li>
                      </ul>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">12:30</th>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">ABS</li>
                        <li class="list-group-item">Total Body</li>
                      </ul>
                    </td>
                    <td></td>
                    <td></td>
                    <td class="highlight">
                      <ul class="list-group list-group-minimal">
                        <li class="list-group-item">ABS</li>
                        <li class="list-group-item">Total Body</li>
                      </ul>
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col text-center text-white">
            <p><span class="badge badge-pill badge-white text-blue mr-1">New</span> Yoga class is now available for Silver Members. <a href="fitness.html" class="link">Learn More</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- / schedule -->    

    
    <!-- left sidebar -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <aside class="col-md-4 pl-lg-5">
            <div class="widget">
              <span class="widget-title">Categories</span>
              <div class="list-group list-group-categories">
                <a href="blog-default.html" class="list-group-item d-flex justify-content-between align-items-center">
                  Cras justo odio
                  <span class="badge">14</span>
                </a>
                <a href="blog-default.html" class="list-group-item d-flex justify-content-between align-items-center">
                  Dapibus ac facilisis in
                  <span class="badge">2</span>
                </a>
                <a href="blog-default.html" class="list-group-item d-flex justify-content-between align-items-center">
                  Morbi leo risus
                  <span class="badge">1</span>
                </a>
              </div>
            </div>
            <div class="widget">
              <span class="widget-title">Latest News</span>
              <ul class="feed">
                <li>
                  <a href="blog-default.html" class="feed-item">
                    <img src="template/assets/images/demo/image-1.jpg" alt="Image">
                    <div class="feed-item-content">
                      <h3>Top 10 most beautifull beaches of mediteranian sea</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog-default.html" class="feed-item">
                    <img src="template/assets/images/demo/image-2.jpg" alt="Image">
                    <div class="feed-item-content">
                      <h3>Amazing views of Paradise Bay</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog-default.html" class="feed-item">
                    <img src="template/assets/images/demo/image-3.jpg" alt="Image">
                    <div class="feed-item-content">
                      <h3>Amazing views of Paradise Bay</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog-default.html" class="feed-item">
                    <img src="template/assets/images/demo/image-4.jpg" alt="Image">
                    <div class="feed-item-content">
                      <h3>Amazing views of Paradise Bay</h3>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="widget">
              <span class="widget-title">Tags</span>
              <div class="tag-cloud">
                <a href="blog-default.html">Design</a>
                <a href="blog-default.html">Development</a>
                <a href="blog-default.html">Travel</a>
                <a href="blog-default.html">Web Design</a>
                <a href="blog-default.html">Marketing</a>
                <a href="blog-default.html">Research</a>
                <a href="blog-default.html">Managment</a>
              </div>
            </div>
          </aside>
          


          <div class="col-md-8">










<section class="bg-light pt-2">

      <div class="containerMascotas">
        <div class="tab-content" id="demo-2">

          <!-- tab connections -->
          <div class="tab-pane show active" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">

              <div class="row justify-content-center">
                
                <div class="col-md-11">
                  <div class="accordion-group" data-accordion-group style="background-color: #FFFFFF">
                    
                    @guest
                      <div class="accordion open" data-accordion>
                    @else
                      <div class="accordion" data-accordion>
                    @endguest

                      <div class="accordion-control" data-control>

                        <h2>Publicar</h2>
                          
                      </div>
                      <div class="accordion-content" data-content>
                        <div class="accordion-content-wrapper">

                        @guest

                        <div class="d-flex justify-content-center">
                          Usted debe&nbsp;<a href="{{ url('/login') }}">iniciar sesión </a>&nbsp;para poder publicar
                        </div>

                        @else
                         
                           <form>

                              <div class="form-row">

                                <div class="form-group col-md-4">

                                  <select class="form-control form-control-sm" id="str_especie" name="str_especie" required>
                                    <option>¿Qué tipo de mascota es?</option>
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                  </select>  

                                </div>

                                <div class="form-group col-md-4">

                                  <input type="text" class="form-control form-control-sm" id="str_mascota" name="str_mascota" aria-describedby="" placeholder="¿Cómo se llama?" required>
                                   
                                </div>

                                <div class="form-group col-md-4">
                                  
                                  <input type="number" class="form-control form-control-sm" id="str_telefono" name="str_telefono" aria-describedby="" placeholder="N° de teléfono de contacto" required>  
                                </div>

                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-4">

                                  <select class="form-control form-control-sm" id="str_ciudad" name="str_ciudad" required>
                                    <option>Selecciona una ciudad</option>
                                    <option value="Caracas">Caracas</option>
                                    <option value="Barquisimeto">Barquisimeto</option>
                                    <option value="Maracay">Maracay</option>
                                    <option value="Valencia">Valencia</option>
                                  </select> 

                                </div>
                              
                                <div class="form-group col-md-4">
                                  <input type="text" class="form-control form-control-sm" id="str_sector" name="str_sector" aria-describedby="" placeholder="Indica una zona o sector cercano" required>  
                                </div>

                                <div class="form-group col-md-4">
                                  <input type="text" class="form-control form-control-sm" id="str_fecha_perdida" name="str_fecha_perdida" aria-describedby="" placeholder="¿Cuándo se extravió?" required>   
                                </div>      

                              </div>

                              <div class="form-row">

                                <div class="form-group col-md-8">
                                    
                                  <input type="file" class="form-control-file form-control-sm" id="str_ruta" name="str_ruta" aria-describedby="" required>

                                </div>

                               <div class="form-group col-md-4">

                                  <select class="form-control form-control-sm" id="str_categoria" name="str_categoria" required>
                                    <option>Seleciona una categoría</option>
                                    <option value="perdidas">Mascotas Perdidas </option>
                                    <option value="medicinas">Medicinas</option>
                                    <option value="adopcion">Adopción</option>
                                    <option value="pareja">Pareja</option>
                                  </select> 

                                </div>                                

                              </div>

                              <div class="form-row">

                                <div class="form-group col-md-8">
                                  
                                  <textarea id="txt_descripcion" name="txt_descripcion" class="form-control form-control-sm" rows="3" placeholder="Describe lo más posible a esta publicación" required></textarea>

                                    <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="{{ Auth::user()->id }}" readonly="yes">
                                    <input type="hidden" id="str_dueno" name="str_dueno" value="{{ Auth::user()->name }}" readonly="yes">
                                    <input type="hidden" id="str_correo" name="str_corro" value="{{ Auth::user()->email }}" readonly="yes">
                                    <input type="hidden" id="str_fecha_publicacion" name="str_fecha_publicacion" value="{{ date('d/m/Y') }}" readonly="yes"> <input type="hidden" id="avatar_usuario" name="str_fecha_publicacion" value="{{ Auth::user()->avatar}}" readonly="yes">
                                </div>

                                <div class="form-group col-md-4 d-flex justify-content-center">
                                                             
                                  <button id="btnpmp" type="button" class="btn btn-rounded btn-primary btb-sm mt-2">Publicar</button>
                               
                                </div>                                

                              </div>    

                            </form>



       <div class="tab-pane show active bg-light" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
          <div class="component-example">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="card">
                    <img class="card-img-top" src="template/assets/images/demo/image-1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some </p>
                      
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>



                           @endguest
                        </div>
                      </div>
                    </div>
         
                  </div>
                </div>
              </div>

            <div id="nuevaPublicacion">

            @if(isset($datos))

              @foreach(array_reverse($datos) as $dato)

                 <div class="row justify-content-center">
                  <div class="col-md-11">
                    <div class="row gutter-1">

                      <div class="col-12">
                        <div class="boxed p-2">
                          <div class="row align-items-center justify-content-between">

                            <div class="col-md-2" style="">
                              <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                  
                                   @if(empty($dato['avatar_usuario']))

                                    <i class="fas fa-paw fs-40"></i>

                                  @else

                                     <img src="{{ $dato['avatar_usuario'] }}" alt="Avatar" class="avatar avatar-lg rounded mr-3">

                                  @endif                                 

                                </div>
                              </div>
                            </div>

                            <div class="col-md-9" style="n">
                              <h5 class="mb-0">{{ $dato['str_mascota']  }} </h5>
                              <span class="text-muted">{{ $dato['str_fecha_perdida']  }}</span>      
                              <p style="justify-content: center;">
                                {{ $dato['txt_descripcion']  }}

                     

                              </p>
                            </div>

                            <div class="col-md-1" style="">

                              <div class="d-flex justify-content-center">
                                <div class="align-self-center">
                                  <div class="dropdown">
                                    <a class="btn btn-ico  text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Compartir">
                                      <i class="far fa-share-square fs-22"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-3">
                                      

                                      <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world" data-size="default">Tweet</a>

                                      <div class="fb-share-button" data-href="http://solucionesbestoffice.com/Colorear-con-BestOffice" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsolucionesbestoffice.com%2FColorear-con-BestOffice%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>                                



                  
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
              </div>
            
              @endforeach

            @endif

            </div>
     
          </div>
          <!-- / tab -->

        </div>
        <br>
      </div>
    </section>














          </div> 
        </div>
      </div>
    </section>
    <!-- / right sidebar -->


@endsection