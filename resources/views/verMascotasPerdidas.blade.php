@extends('layouts.app1')

@section('content')

    <!-- team -->
    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Team <b>Members</b></h2>
          </div>
          <div class="col-md-6">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fugit id minus praesentium enim. Veniam architecto deleniti, minus eum doloremque nihil, nobis iste atque sequi facere dolorum cumque a officia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">

            <div class="owl-carousel visible" data-items="[3,2]" data-loop="true" data-margin="30" data-nav="true">
              <figure class="user">
                <a href="team.html" class="user-photo">
                  <img src="template/assets/images/demo/user-1.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials socials-sm socials-bordered">
                    <li><a href="team.html" class="icon-facebook"></a></li>
                    <li><a href="team.html" class="icon-instagram"></a></li>
                    <li><a href="team.html" class="icon-twitter"></a></li>
                  </ul>
                </figcaption>
              </figure>
              <figure class="user">
                <a href="team.html" class="user-photo">
                  <img src="template/assets/images/demo/user-2.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials socials-sm socials-bordered">
                    <li><a href="team.html" class="icon-facebook"></a></li>
                    <li><a href="team.html" class="icon-instagram"></a></li>
                    <li><a href="team.html" class="icon-twitter"></a></li>
                  </ul>
                </figcaption>
              </figure>
              <figure class="user">
                <a href="team.html" class="user-photo">
                  <img src="template/assets/images/demo/user-3.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials socials-sm socials-bordered">
                    <li><a href="team.html" class="icon-facebook"></a></li>
                    <li><a href="team.html" class="icon-instagram"></a></li>
                    <li><a href="team.html" class="icon-twitter"></a></li>
                  </ul>
                </figcaption>
              </figure>
              <figure class="user">
                <a href="team.html" class="user-photo">
                  <img src="template/assets/images/demo/user-4.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials socials-sm socials-bordered">
                    <li><a href="team.html" class="icon-facebook"></a></li>
                    <li><a href="team.html" class="icon-instagram"></a></li>
                    <li><a href="team.html" class="icon-twitter"></a></li>
                  </ul>
                </figcaption>
              </figure>
              <figure class="user">
                <a href="team.html" class="user-photo">
                  <img src="template/assets/images/demo/user-5.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials socials-sm socials-bordered">
                    <li><a href="team.html" class="icon-facebook"></a></li>
                    <li><a href="team.html" class="icon-instagram"></a></li>
                    <li><a href="team.html" class="icon-twitter"></a></li>
                  </ul>
                </figcaption>
              </figure>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / team -->




    <section class="bg-light pt-2">

      <div class="containerMascotas">
        <div class="tab-content" id="demo-2">

          <!-- tab connections -->
          <div class="tab-pane show active" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">




              <div class="row justify-content-center">
                
                <div class="col-md-8">
                  <div class="accordion-group" data-accordion-group style="background-color: #FFFFFF">
                    <div class="accordion " data-accordion>
                      <div class="accordion-control" data-control>
                        <h5>Publicar</h5>
                      </div>
                      <div class="accordion-content" data-content>
                        <div class="accordion-content-wrapper">
                         
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
                                    <option>¿En que ciudad se extravió?</option>
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

                                <div class="form-group col-md-12">
                                    
                                  <input type="file" class="form-control-file form-control-sm" id="str_ruta" name="str_ruta" aria-describedby="" required>

                                </div>

                              </div>

                              <div class="form-row">

                                <div class="form-group col-md-12">
                                  
                                  <textarea id="txt_descripcion" name="txt_descripcion" class="form-control form-control-sm" rows="3" placeholder="Describe lo más posible a tu mascota" required></textarea>            
                                  
                                </div>

                              </div>    

                              <button id="btnpmp" type="button" class="btn btn-sm btn-primary btn-rounded btn-block">Publicar</button>
                            </form>

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




<!-- modal -->



                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                      <div class="modal-content">


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
                          <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="{{ Auth::user()->id }}" readonly="yes">
                          <input type="hidden" id="str_dueno" name="str_dueno" value="{{ Auth::user()->name }}" readonly="yes">
                          <input type="hidden" id="str_correo" name="str_corro" value="{{ Auth::user()->email }}" readonly="yes">
                        </div>

                        <div class="modal-footer">



                          <button id="btnpmp" type="button" class="btn btn-sm btn-primary btn-rounded btn-block">Publicar</button>


                        </div>



                      </div>
                    </div>
                  </div>


@endsection