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

  ref.once('value',gotData, errData);
  ref.on('value',oneData, errData);

var caja = document.getElementById('prueba');


function oneData(data){
  alert('oneData');

  console.log(data.val());

   if(data.val() != null){

  //console.log(data);
  //console.log(data.val());

  var mascotas = data.val();




  var keys = Object.keys(mascotas);



  //console.log(keys);

  var mascotasArray = Object.values(mascotas);

  //console.log(mascotasArray.reverse());

  



  for (var i = keys.length-1; i > 0; i-- ) {
    var k = keys[i];
    //var lng_idusuario = mascotas[k].lng_idusuario;
    var str_mascota = mascotas[k].str_mascota;
  
    //console.log(str_mascota);

    caja.innerHTML = caja.innerHTML + str_mascota + "<br>" ;

  }


/**


    var k = keys.length;
    var lng_idusuario = mascotas[k].lng_idusuario;
    var str_dueno = mascotas[k].str_dueno;
    var str_telefono = mascotas[k].str_telefono;
    var str_correo = mascotas[k].str_correo;
    var str_mascota = mascotas[k].str_mascota;
    var str_especie = mascotas[k].str_especie;
    var str_ruta = mascotas[k].str_ruta;
    var str_ciudad = mascotas[k].str_ciudad;    
    var str_sector = mascotas[k].str_sector;
    var str_fecha_perdida = mascotas[k].str_fecha_perdida;
    var txt_descripcion = mascotas[k].txt_descripcion;     
    //console.log(str_mascota, str_dueno);

    caja.innerHTML = caja.innerHTML + str_mascota + "<br>" ;

*/



}


}

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
}


function errData(err){
  console.log('Error!');
  console.log(err);
}


document.getElementById("btnpmp").addEventListener("click", pmp);

function pmp(){//publicar mascotas perdidas

   var data = {

    lng_idusuario: document.getElementById('lng_idusuario').value,
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

  }

  ref.push(data);

}
