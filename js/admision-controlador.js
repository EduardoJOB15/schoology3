/*cuando presiona el boton btn-log:
1.deve identificar si es un correo o nombre.
2.verificar si existe ese correo o nombre y la contraseña en la base de datos(un SELECT con un for y un if),
  en caso de que no exista tirar una ventana emergente que diga : "correo o contraseña incorrecta".
3.identificar si es instructor,
  redirecionar segun el caso.  
*/
//id respuesta->
$(document).ready(function(){
  //Se ejecuta cuando el DOM este cargado completamente
  console.log('funciona');
});

$('#btn-guarar').click(function(){
  console.log("procesando...");
  var parametros ='nombre='+$('#email').val()+"&"+'password='+$('#password').val();
  var parametros2;
  console.log("Esto se enviará al servidor: "+parametros);
  $.ajax({
    url:"ajax/procesar-login.php",
    method:"POST",
    data:parametros,
    dataType: "json",
    success:function(respuesta){
       console.log(respuesta.codusuario);
      //console.log(respuesta);
      parametros2 = 'codusuario='+respuesta.codusuario+"&"+'nombre1='+respuesta.nombre1;
      
  },error:function(error){
    //Se ejecutara cuando sea erroneo
    console.error(error);
    console.log("no regreso respuesta");
  }
  });
});

/**
 * $.ajax({
        url:"ajax/procesar-archivo.php",
        method:"POST",
        data:parametros2,
        dataType: "json",
        success:function(respuesta2){
          console.log(respuesta2);
          
      },error:function(error){
        //Se ejecutara cuando sea erroneo
        console.error(error);
        console.log("no regreso respuesta");
      }
      });
 */