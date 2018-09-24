   // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCBiTzsclQXinCB02WndDyQY31OWWcLmSU",
    authDomain: "guauser-b34cf.firebaseapp.com",
    databaseURL: "https://guauser-b34cf.firebaseio.com",
    projectId: "guauser-b34cf",
    storageBucket: "guauser-b34cf.appspot.com",
    messagingSenderId: "392674517259"
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

//document.getElementById("archivoUp").addEventListener("change", subirArchivo);

function subirArchivo(){
  
  if(document.getElementById('archivoUp').value != "" ){

    //alert('subiendo');
    document.getElementById("archivoForm").submit();
  }
}

$(".custom-file-input").change(function(){
$.ajax({
      url:'/upload',
      data:new FormData($("#archivoForm")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        console.log(response);
      },
    });
 });

//publicar contenido:
document.getElementById("btnpmp").addEventListener("click", pmp);

function pmp(){//publicar  

  var categoria;
  var nombreArchivo;
  var d = new Date();
  var horas = d.getHours();
  var minutos = d.getMinutes();
  var segundos = d.getSeconds();
  var hora;

  if (minutos < 10) {
    minutos = "0"+minutos;
  }

  if (segundos < 10) {
    segundos = "0"+segundos;
  }  

  hora = horas+":"+minutos+":"+segundos;

  categoria = document.getElementById('categorias').options[document.getElementById('categorias').selectedIndex].text;

  if(categoria == "Categorías"){
    categoria = "Ninguna"
  }

  //document.getElementById("archivoForm").submit();

    nombreArchivo = document.querySelector('input[type=file]').files[0].name;//corresponde al input file 'logo'
    document.getElementById('nombreArchivo').innerHTML = nombreArchivo;

  //alert(document.getElementById('lng_idusuario').value+"_"+nombreArchivo);

  var data = {

    str_categoria: categoria,
    txt_descripcion: document.getElementById('txt_descripcion').value,
    lng_idusuario: document.getElementById('lng_idusuario').value,
    usuario: document.getElementById('usuario').value,  
    str_correo: document.getElementById('str_correo').value,    
    str_fecha_publicacion: document.getElementById('str_fecha_publicacion').value, 
    avatar_usuario: document.getElementById('avatar_usuario').value,     
    archivo: document.getElementById('lng_idusuario').value+"_"+nombreArchivo, 
    str_hora: hora, 
     
  }

  ref.push(data);

  document.getElementById('txt_descripcion').value = "";
  document.getElementById('logo').value = "";  
  document.getElementById('categorias').selectedIndex = 0;
  document.getElementById('select2-categorias-container').innerHTML = document.getElementById('categorias').options[document.getElementById('categorias').selectedIndex].text;

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
  }else{
    setTimeout('cargarndoNone()',200)
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

    document.getElementById('cargando').style.display = "inline";

    var elementos;
    var avatar;
    var ruta;
    var clase;    
    
    timelineArray.reverse().forEach(function(element) {
    //console.log(element);

    switch(element['str_categoria']) {
      case 'Entretenimiento':
          clase = 'badge badge-primary';
          break;
      case 'Tecnología':
          clase = 'badge badge-secondary';
          break;
      case 'Noticias':
          clase = 'badge badge-success';
          break;
      case 'Servicios':
          clase = 'badge badge-info';
          break;
      case 'Política':
          clase = 'badge badge-warning';
          break;
      case 'Deportes':
          clase = 'badge badge-danger';
          break;
      case 'Religión':
          clase = 'badge badge-light';
          break;
      case 'Economía':
          clase = 'badge badge-dark';
          break;
      case 'Mascotas':
          clase = 'badge badge-secondary';
          break;
      case 'Salud':
          clase = 'badge badge-secondary';
          break;
      case 'Sexo':
          clase = 'badge badge-secondary';
          break;
      case 'Ninguna':
          clase = '';
          break;                            
      default:
          clase = '';
    }

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
      ruta = '<p class="text-center mb-3"><img src="storage/'+element['archivo']+'" alt="..." class="img-fluid rounded"></p>';        
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
    elementos +='                                  <span class="'+clase+'">'+element['str_categoria']+'</span> <span class="fe fe-calendar"></span>' + ' ' +element['str_fecha_publicacion'] + ' ' +'<span class="fe fe-clock"></span>' + ' ' +element['str_hora'];
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
    elementos +=                            ruta;    
    elementos +='                          <p class="mb-3" style="text-align: justify;">';
    elementos +=                              element['txt_descripcion'];
    elementos +='                          </p>';    
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
  setTimeout('cargarndoNone()',200)
}

function cargarndoNone() {
   
  document.getElementById('cargando').style.display = "none";
}