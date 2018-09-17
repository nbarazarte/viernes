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
  var ref = database.ref('mascotas');
  
  var contOn = 0;
  
  //ref.once('value',gotData, errData);
  ref.on('value',oneData, errData);

  var caja = document.getElementById('nuevaPublicacion');

function oneData(data){

      var elementos;
      var mascotas = data.val();
      var keys = Object.keys(mascotas);
      //console.log(keys);
      var mascotasArray = Object.values(mascotas);
      var avatar;
      //console.log(mascotasArray.reverse());
      mascotasArray.reverse().forEach(function(element) {
      //console.log(element);

        if(elementos == null){
          elementos = "";
        }


        if(element['avatar_usuario'] == ""){

          avatar = '<i class="fas fa-paw fs-22"></i>';

        }else{  

          avatar = '<img src="'+element['avatar_usuario']+'" alt="Avatar" class="avatar avatar-lg rounded mr-3">';

        }







        //elementos = elementos + element['str_mascota'] + "<br>" ;
elementos = elementos +'                  <div class="row justify-content-center">';
elementos +='                  <div class="col-md-11">';
elementos +='                    <div class="row gutter-1">';
elementos +='';
elementos +='                      <div class="col-12">';
elementos +='                        <div class="boxed p-2">';
elementos +='                          <div class="row align-items-center justify-content-between">';
elementos +='';
elementos +='                            <div class="col-md-2" style="">';
elementos +='                              <div class="d-flex justify-content-center">';
elementos +='                                <div class="align-self-center">';
elementos +=                                  avatar;
elementos +='                                </div>';
elementos +='                              </div>';
elementos +='                            </div>';
elementos +='';
elementos +='                            <div class="col-md-9" style="n">';
elementos +='                              <h5 class="mb-0">'+ element['str_mascota'] +' </h5>';
elementos +='                              <span class="text-muted">'+element['str_fecha_publicacion']+'</span>      ';
elementos +='                              <p style="justify-content: center;">';
elementos +=                                  element['txt_descripcion'];
elementos +='                              </p>';
elementos +='                            </div>';
elementos +='';
elementos +='                            <div class="col-md-1" style="">';
elementos +='';
elementos +='                              <div class="d-flex justify-content-center">';
elementos +='                                <div class="align-self-center">';
elementos +='                                  <div class="dropdown">';
elementos +='                                    <a class="btn btn-ico  text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Compartir">';
elementos +='                                      <i class="far fa-share-square fs-22"></i>';
elementos +='                                    </a>';
elementos +='';
elementos +='                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-3">';
elementos +='                                      <a class="dropdown-item" href="#">Make Primary</a>';
elementos +='                                      <a class="dropdown-item" href="#">Remove</a>';
elementos +='                                    </div>';
elementos +='                                  </div>';
elementos +='                                </div>';
elementos +='                              </div>';
elementos +='';
elementos +='                            </div>';
elementos +='';
elementos +='                        </div>';
elementos +='                      </div>';
elementos +='                    </div>';
elementos +='                  </div>';
elementos +='                </div>';
elementos +='              </div>';


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

    lng_idusuario: document.getElementById('lng_idusuario').value,
    str_categoria: document.getElementById('str_categoria').value,
    str_dueno: document.getElementById('str_dueno').value, 
    str_telefono: document.getElementById('str_telefono').value, 
    str_correo: document.getElementById('str_correo').value,
    str_mascota: document.getElementById('str_mascota').value,
    str_especie: document.getElementById('str_especie').value,
    str_ruta: document.getElementById('str_ruta').value, 
    str_ciudad: document.getElementById('str_ciudad').value,
    str_sector: document.getElementById('str_sector').value,
    str_fecha_perdida: document.getElementById('str_fecha_perdida').value, 
    txt_descripcion: document.getElementById('txt_descripcion').value,
    str_fecha_publicacion: document.getElementById('str_fecha_publicacion').value, 
    avatar_usuario: document.getElementById('avatar_usuario').value, 

  }

  ref.push(data);

}
