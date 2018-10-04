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

document.getElementById('logo').addEventListener('change', mostrarThumbnail, false);

//coloca la miniatura de la imágen:
function handleFileSelect(evt) {

    //validate();

    if(validate() == true){

        //alert('es válido el archivo');

        document.getElementById('list').innerHTML = "";
        document.getElementById('displayImagen').style.display = "inline";

        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

          // Only process image files.
          if (!f.type.match('image.*')) {
            continue;//capture();
          }

          var reader = new FileReader();

          // Closure to capture the file information.
          reader.onload = (function(theFile) {
            return function(e) {
              // Render thumbnail.
              var span = document.createElement('span');
              span.innerHTML = ['<img class="thumb img-thumbnail" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
              document.getElementById('list').insertBefore(span, null);
            };
          })(f);

          // Read in the image file as a data URL.
          reader.readAsDataURL(f);
        }

        nombreArchivo = document.querySelector('input[type=file]').files[0].name;//corresponde al input file 'logo'
        //document.getElementById('nombreArchivo').innerHTML = nombreArchivo;    

    }else{
      
      document.getElementById('msjs').innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>¡Disculpe!</strong> El tamaño del archivo debe ser menor a 500MB.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

  }







function mostrarThumbnail(){

  if(validate() == true){

    document.getElementById('list').innerHTML = "";
    document.getElementById('displayImagen').style.display = "inline";  

    var file = event.target.files[0];
    var fileReader = new FileReader();

    if (file.type.match('image')) {

      fileReader.onload = function() {

        var img = document.createElement('img');
        img.src = fileReader.result;
        img.classList.add("img-thumbnail");
        //document.getElementsByTagName('div')[0].appendChild(img);

        document.getElementById('list').appendChild(img);

      };

      fileReader.readAsDataURL(file);

    } else {

      fileReader.onload = function() {

        var blob = new Blob([fileReader.result], {type: file.type});
        var url = URL.createObjectURL(blob);
        var video = document.createElement('video');

        var timeupdate = function() {

          if (snapImage()) {

            video.removeEventListener('timeupdate', timeupdate);
            video.pause();

          }
        };

        video.addEventListener('loadeddata', function() {

          if (snapImage()) {

            video.removeEventListener('timeupdate', timeupdate);
          }

        });

        var snapImage = function() {

          var canvas = document.createElement('canvas');
          canvas.width = video.videoWidth;
          canvas.height = video.videoHeight;
          canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
          var image = canvas.toDataURL();
          var success = image.length > 100000;

          if (success) {

            var img = document.createElement('img');
            img.src = image;
            img.classList.add("img-thumbnail");
            
            //document.getElementsByTagName('div')[0].appendChild(img);
            document.getElementById('list').appendChild(img);
            URL.revokeObjectURL(url);

          }

          return success;

        };

        video.addEventListener('timeupdate', timeupdate);
        video.preload = 'metadata';
        video.src = url;
        // Load video in Safari / IE11
        video.muted = true;
        video.playsInline = true;
        video.play();

      };

      fileReader.readAsArrayBuffer(file);

    }

  }else{
    
    document.getElementById('msjs').innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>¡Disculpe!</strong> El tamaño del archivo debe ser menor a 500MB.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
  }

}

//publicar contenido:
document.getElementById("btnpmp").addEventListener("click", pmp);

function pmp(){//publicar  

  //sube la imágen por ajax:
  $.ajax({
      url:'/upload',
      data:new FormData($("#archivoForm")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(response){
        //console.log(response);
        //var str = JSON.stringify(response, null, 2); // spacing level = 2
        //document.getElementById('miPrueba').innerHTML = str;//el div habria que crearlo
      },
    });

  //guarda los datos en firebase:
  var categoria;
  var nombreArchivo;
  var nombre;
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

  if(document.getElementById('logo').value != ""){

    nombreArchivo = document.querySelector('input[type=file]').files[0].name;//corresponde al input file 'logo'        
    nombre = document.getElementById('lng_idusuario').value+"_"+nombreArchivo;

  }else{

    nombre = "";
  }

  var data = {

    str_categoria: categoria,
    txt_descripcion: document.getElementById('txt_descripcion').value,
    lng_idusuario: document.getElementById('lng_idusuario').value,
    usuario: document.getElementById('usuario').value,  
    str_correo: document.getElementById('str_correo').value,    
    str_fecha_publicacion: document.getElementById('str_fecha_publicacion').value, 
    avatar_usuario: document.getElementById('avatar_usuario').value,     
    archivo: nombre,
    str_hora: hora, 
  }

  ref.push(data);

  document.getElementById('txt_descripcion').value = "";
  document.getElementById('logo').value = "";  
  document.getElementById('list').innerHTML = ""; 
  //document.getElementById('nombreArchivo').innerHTML = ""; 
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

    if(element['archivo'] == ""){

      ruta = '';

    }else{  

      var str = element['archivo'];
      var file_type = str.substr(-4);
    
      switch(file_type) {
        case 'jpeg':
        case '.jpg':
        case '.png':
            ruta = '<p class="text-center mb-3"><img src="storage/'+element['archivo']+'" alt="..." class="img-fluid rounded" style="max-width: 100%; height: auto;"></p>'; 
            break;
        case '.mp4':
            ruta = '<div class="embed-responsive embed-responsive-16by9">';
            //ruta +=   '<iframe class="embed-responsive-item" src="storage/'+element['archivo']+'" allowfullscreen></iframe>';
            ruta += '<video controls="controls" controlsList="nodownload" preload="metadata"><source src="storage/'+element['archivo']+'" type="video/mp4"></video>';
            ruta += '</div>';
            break;          
      }          
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
  displayImagen();
  setTimeout('cargarndoNone()',200)
}

function cargarndoNone() {
   
  document.getElementById('cargando').style.display = "none";
}

document.getElementById("cerrarDisplayImagen").addEventListener("click", displayImagen);

function displayImagen() {
   
  document.getElementById('logo').value = "";
  document.getElementById('displayImagen').style.display = "none";
}

function validate(){

  var size=524288000;//500MB
  var file_size=document.getElementById('logo').files[0].size;

  if(file_size>=size){
      //alert('File too large');
      return false;
  }

  /*var type='image/jpeg';
  var file_type=document.getElementById('logo').files[0].type;

  if(file_type!=type){
      //alert('Format not supported,Only .jpeg images are accepted');
      return false;
  }*/

  return true;
}