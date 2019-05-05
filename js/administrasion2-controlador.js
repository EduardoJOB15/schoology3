$(document).ready(function(){
    console.log('funciona2');
  });
  
  $('#btn-guarar').click(function(){
    console.log("procesando...");
    var parametros ='password='+$('#password').val();
    console.log("Esto se enviará al servidor2: "+parametros);
    $.ajax({
      url:"procesar-archivo.php",
      method:"POST",
      data:parametros,
      dataType: "json",
      success:function(respuesta){
          console.log(respuesta);
    },error:function(error){
      //Se ejecutara cuando sea erroneo
      console.error(error);
      console.log("no regreso respuesta");
    }
    });
  });
  