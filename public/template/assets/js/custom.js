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
  
  var contOnce = 0;
  var contOn = 0;
  var contNuevaspublicaciones = 0;

  var cajaPublicaciones = document.getElementById('publicaciones');
  var todoTimeline;
  
  ref.once('value',gotData, errData);//se llama una sola vez a la funcion gotData para cargar el time line
  ref.on('value',oneData, errData);//se llama cada vez que hay un elemento nuevo o eliminado en el time line de la base de datos
/*******************************************************************************************************************************/


//publicar contenido:
document.getElementById("btnpmp").addEventListener("click", pmp);

function pmp(){//publicar  

  var d = new Date();
  var horas = d.getHours();
  var minutos = d.getMinutes();
  var segundos = d.getSeconds();
  var hora = horas+":"+minutos+":"+segundos;

  var data = {

    txt_descripcion: document.getElementById('txt_descripcion').value,
    lng_idusuario: document.getElementById('lng_idusuario').value,
    usuario: document.getElementById('usuario').value,
    str_categoria: document.getElementById('str_categoria').value,    
    str_correo: document.getElementById('str_correo').value,    
    str_fecha_publicacion: document.getElementById('str_fecha_publicacion').value, 
    avatar_usuario: document.getElementById('avatar_usuario').value,     
    str_ruta: document.getElementById('str_ruta').value, 
    str_hora: hora, 
     
  }

  ref.push(data);

  document.getElementById('txt_descripcion').value = "";
  document.getElementById('str_ruta').value = "";
}


function gotData(data){

  contOnce = 1;

  if(data.val() != null){

    var timeline = data.val();
    var keys = Object.keys(timeline);
    //console.log(keys);
    var timelineArray = Object.values(timeline);
    //console.log(timelineArray.reverse());

    recorrerTimeline(timelineArray);
  }

}

function oneData(data){

  contOn = contOn + 1;

  //alert(contOn)

  if ((contOnce == 1 ) && (contOn > 1)) {

  /*
    //para saber el primero
    var group = ["a","b","c","d","e"];
    var groupLength = group.length;

    while (groupLength--) {
        var item = group[groupLength];

        if(groupLength == 0){
            console.log("Last iteration with item : " + item);
        }
    }
  */

    todoTimeline = data.val();

    var timeline = data.val();
    var keys = Object.keys(timeline);
    //console.log(keys);
    var timelineArray = Object.values(timeline);
    //console.log(timelineArray.reverse());

    //para saber el último
    var group = timelineArray;//["a","b","c","d","e"];
    var groupLength = group.length;

    for(var i = 0;i < groupLength;i++){
        var element = group[i];

      // Do something if is the last iteration of the array
      if((i + 1) == (groupLength)){
        //console.log("Last iteration with element : " + element['txt_descripcion']);

        contNuevaspublicaciones = contNuevaspublicaciones + 1;

        if(contNuevaspublicaciones > 1){

          document.getElementById('contNuevaspublicaciones').innerHTML = contNuevaspublicaciones + " nuevos mensajes";

        }else{

          document.getElementById('contNuevaspublicaciones').innerHTML = contNuevaspublicaciones + " nuevo mensaje";
        }

        document.getElementById('msjNuevaspublicaciones').style.display = "inline";
      }
    }
  }
}

function errData(err){
  console.log('Error!');
  console.log(err);
}

document.getElementById("leerMsj").addEventListener("click", mensajes);

function mensajes(){

  document.getElementById('msjNuevaspublicaciones').style.display = "none";
  
  contNuevaspublicaciones = 0;

  var timeline = todoTimeline;
  var keys = Object.keys(timeline);
  //console.log(keys);
  var timelineArray = Object.values(timeline);
  //console.log(timelineArray.reverse());

  recorrerTimeline(timelineArray);

}

function recorrerTimeline(timelineArray) {

    var elementos;
    var avatar;
    var ruta;    
    
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
    elementos +='                                  <span class="fe fe-calendar"></span>' + ' ' +element['str_fecha_publicacion'] + ' ' +'<span class="fe fe-clock"></span>' + ' ' +element['str_hora'];
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

    elementos +='                              </div>';
    elementos +='                            </div> ';
    elementos +='                          </div>';
    elementos +='                          <hr>';

  });

  cajaPublicaciones.innerHTML = elementos;  
}