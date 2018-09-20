  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyASsoaJ07fjaa5w4WqAf5cokq4EDo-CtYY",
    authDomain: "home4pets-82b57.firebaseapp.com",
    databaseURL: "https://home4pets-82b57.firebaseio.com",
    projectId: "home4pets-82b57",
    storageBucket: "home4pets-82b57.appspot.com",
    messagingSenderId: "988879338473"
  };
  firebase.initializeApp(config);

  var database = firebase.database();
  var ref = database.ref('timeline');
  
  var contOn = 0;
  
  //ref.once('value',gotData, errData);
  ref.on('value',oneData, errData);

  var caja = document.getElementById('nuevaPublicacion');

function oneData(data){

      var elementos;
      var timeline = data.val();
      var keys = Object.keys(timeline);
      //console.log(keys);
      var timelineArray = Object.values(timeline);
      var avatar;
      var ruta;
      //console.log(mascotasArray.reverse());
      timelineArray.reverse().forEach(function(element) {
      //console.log(element);

      if(elementos == null){
        elementos = "";
      }

      if(element['avatar_usuario'] == ""){

        avatar = '<img src="templateDashkit/assets/img/avatars/profiles/user.png" alt="Avatar" class="avatar-img rounded-circle">';

      }else{  

        avatar = '<img src="'+element['avatar_usuario']+'" alt="Avatar" class="avatar-img rounded-circle">';

      }

      if(element['str_ruta'] == ""){

        ruta = '';

      }else{  

        //ruta = '<p class="text-center mb-3"><img src="'+element['str_ruta']+'" alt="..." class="img-fluid rounded"></p>';
        ruta = '<p class="text-center mb-3"><img src="templateDashkit/assets/img/posts/post-1.jpg" alt="..." class="img-fluid rounded"></p>';
        

      }

elementos = elementos +'<div class="mb-3">';
elementos +='                            <div class="row align-items-center">';
elementos +='                              <div class="col-auto">';
elementos +='                                ';
elementos +='                                <a href="#!" class="avatar">';
elementos +=                                  avatar;
elementos +='                                </a>';
elementos +='                              </div>';
elementos +='                              <div class="col ml--2">';
elementos +='                                <h4 class="card-title mb-1">';
elementos +=                                  element['usuario'];
elementos +='                                </h4>';
elementos +='                                <p class="card-text small text-muted">';
elementos +='                                  <span class="fe fe-clock"></span> <time datetime="2018-05-24">'+element['str_fecha_publicacion'] + " " +element['str_hora'] +'</time>';
elementos +='                                </p>';
elementos +='                              </div>';
elementos +='                              <div class="col-auto">';
elementos +='                                <div class="dropdown">';
elementos +='                                  <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
elementos +='                                    <i class="fe fe-more-vertical"></i>';
elementos +='                                  </a>';
elementos +='                                  <div class="dropdown-menu dropdown-menu-right">';
elementos +='                                    <a href="#!" class="dropdown-item">';
elementos +='                                      Action';
elementos +='                                    </a>';
elementos +='                                  </div>';
elementos +='                                </div>';
elementos +='                              </div>';
elementos +='                            </div>';
elementos +='                          </div>';
elementos +='                          <p class="mb-3" style="text-align: justify;">';
elementos +=                              element['txt_descripcion'];
elementos +='                          </p>                          ';
elementos +=                            ruta;
elementos +='                          <div class="mb-3">';
elementos +='                            <div class="row">';
elementos +='                              <div class="col">';
elementos +='                                <a href="#!" class="btn btn-sm btn-white">';
elementos +='                                  <i class="far fa-smile"></i> 1';
elementos +='                                </a>';
elementos +='                                <a href="#!" class="btn btn-sm btn-white">';
elementos +='                                  <i class="far fa-angry"></i> 0';
elementos +='                                </a>                                ';
elementos +='                              </div>';
elementos +='                              <div class="col-auto">';
elementos +='                                <div class="d-flex justify-content-center">';
elementos +='                                  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world" data-size="default">Tweet</a>';
elementos +='                                  <div class="fb-share-button" data-href="http://solucionesbestoffice.com/Colorear-con-BestOffice" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsolucionesbestoffice.com%2FColorear-con-BestOffice%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>                                                    ';
elementos +='                                </div>';
elementos +='                              </div>';
elementos +='                            </div> ';
elementos +='                          </div>';
elementos +='                          <hr>';



     });

     caja.innerHTML = elementos;
}

/*
function gotData(data){
  //alert('todos');

  //console.log(data);
  //console.log(data.val());

   if(data.val() != null){

      var mascotas = data.val();
      var keys = Object.keys(mascotas);
      //console.log(keys);
      var mascotasArray = Object.values(mascotas);
      //console.log(mascotasArray.reverse());
      mascotasArray.reverse().forEach(function(element) {
      //console.log(element);
      caja.innerHTML = caja.innerHTML + element['str_mascota'] + "<br>" ;

    });

  }

}*/

function errData(err){
  console.log('Error!');
  console.log(err);
}

document.getElementById("btnpmp").addEventListener("click", pmp);

function pmp(){//publicar mascotas 

   var data = {

    txt_descripcion: document.getElementById('txt_descripcion').value,
    lng_idusuario: document.getElementById('lng_idusuario').value,
    usuario: document.getElementById('usuario').value,
    str_categoria: document.getElementById('str_categoria').value,    
    str_correo: document.getElementById('str_correo').value,    
    str_fecha_publicacion: document.getElementById('str_fecha_publicacion').value, 
    avatar_usuario: document.getElementById('avatar_usuario').value,     
    str_ruta: document.getElementById('str_ruta').value, 
    str_hora: document.getElementById('str_hora').value, 
     
  }

  ref.push(data);

  document.getElementById('txt_descripcion').value = "";
  document.getElementById('str_ruta').value = "";

}
