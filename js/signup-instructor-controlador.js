$(document).ready(function(){
    //Se ejecuta cuando el DOM este cargado completamente
    console.log('funciona');
  });
  
  $('#btn-guarar').click(function(){
    console.log("procesando...");
    var parametros ='nombre1='+$('#nombre1').val()+"&"+'apellido='+$('#apellido').val()+"&"+'correo='+$('#email').val()+"&"+'contrasena='+$('#password').val()+"&"+'codigoescuela='+$('#cod-escuela').val();
  
    console.log("Esto se enviará al servidor: "+parametros);
    
    $.ajax({
      url:"ajax/procesar-signup.php?accion=guardarinstructor",
      data:parametros,
      dataType: "json",
      success:function(respuesta){
        console.log(respuesta);

    },error:function(error){
      console.error(error);

      console.log("no regreso respuesta");
    }
    });
    
  
  });