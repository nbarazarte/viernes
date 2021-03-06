   // Initialize Firebase

  var database = firebase.database();
  var ref = database.ref('timeline');
  
  var contOnce = 0;
  var contOn = 0;
  var contNuevaspublicaciones = 0;

  var cajaPublicaciones = document.getElementById('publicaciones');
  var timeline;
  
  ref.once('value',gotData, errData);//se llama una sola vez a la funcion gotData para cargar el time line
  ref.on('value',oneData, errData);//se llama cada vez que hay un elemento nuevo o eliminado en el time line de la base de datos
/*******************************************************************************************************************************/

document.getElementById('logo').addEventListener('change', mostrarThumbnail, false);

//coloca la miniatura de la imágen:
function mostrarThumbnail(e){

  if(validate() == true){

    document.getElementById('list').innerHTML = '<div id="cargando"><div class="d-flex justify-content-center"><div class="loader loader-primary"></div></div></div>';

    document.getElementById('displayImagen').style.display = "inline";  

    var file = e.target.files[0];
    var fileReader = new FileReader();

    if (file.type.match('image')) {

      fileReader.onload = function() {

        var img = document.createElement('img');
        img.src = fileReader.result;
        img.classList.add("img-thumbnail");
        //document.getElementsByTagName('div')[0].appendChild(img);

        document.getElementById('list').innerHTML = '';
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
            document.getElementById('list').innerHTML = '';
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
  
    nombreArchivo = document.querySelector('input[type=file]').files[0].name;//corresponde al input file 'logo'        
    nombre = document.getElementById('lng_idusuario').value+"_"+nombreArchivo;

  }else{

    nombre = "";
  }

  var id = firebase.database().ref().child('timeline').push().key;
  var data = {
    id: id,
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

  //ref.push(data);
  firebase.database().ref('timeline/'+id).set(data);

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

    timeline = data.val();

    recorrerTimeline();
  }else{
    setTimeout('cargarndoNone()',200)
  }

}

function oneData(data){

  contOn = contOn + 1;

  //alert(contOn)

  if ((contOnce == 1 ) && (contOn > 1)) {

    timeline = data.val();

    contNuevaspublicaciones = contNuevaspublicaciones + 1;

    if(contNuevaspublicaciones > 1){

      document.getElementById('contNuevaspublicaciones').innerHTML = contNuevaspublicaciones + " nuevos mensajes";

    }else{

      document.getElementById('contNuevaspublicaciones').innerHTML = contNuevaspublicaciones + " nuevo mensaje";
    }

    document.getElementById('msjNuevaspublicaciones').style.display = "inline";
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

  recorrerTimeline();
}

function recorrerTimeline() {

  //var keys = Object.keys(timeline);
  //console.log(keys);
  var timelineArray = Object.values(timeline);
  //console.log(timelineArray.reverse());

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
            ruta = '<p class="text-center mb-3"><img src="storage/'+element['archivo']+'" alt="..." class="img-fluid rounded" style="max-width: 100%; width: 600px; height: auto;"></p>'; 
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
    elementos +='                                <a href="" class="avatar">';
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
    elementos +='                                  <a href="" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
    elementos +='                                    <i class="fe fe-more-vertical"></i>';
    elementos +='                                  </a>';
    elementos +='                                  <div class="dropdown-menu dropdown-menu-right">';
    elementos +='                                    <a href="" class="dropdown-item">';
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
    elementos +='                                <a href="" class="btn btn-sm btn-white">';
    elementos +='                                  <i class="far fa-smile"></i> 1';
    elementos +='                                </a>';
    elementos +='                                <a href="" class="btn btn-sm btn-white">';
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

publicIp.v4().then(ip => {
  console.log(ip);   
  //iplocation('56.70.97.8', function (error, res) {
  //iplocation('190.76.34.91', function (error, res) {
  iplocation(ip, function (error, res) {    
  console.log(res);  
    /* res:

      {
        as: 'AS11286 KeyBank National Association',
        city: 'Cleveland',
        country: 'United States',
        countryCode: 'US',
        isp: 'KeyBank National Association',
        lat: 41.4875,
        lon: -81.6724,
        org: 'KeyBank National Association',
        query: '156.77.54.32',
        region: 'OH',
        regionName: 'Ohio',
        status: 'success',
        timezone: 'America/New_York',
        zip: '44115'
      }

    */
  })
});