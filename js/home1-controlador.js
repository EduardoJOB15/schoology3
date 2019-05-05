$(document).ready(function(){
    console.log('funciona');

    $.ajax({
      url:"ajax/procesar-blog.php",
      dataType: "json",
      success:function(respuesta){
          console.log(respuesta);
          $('#contenedor-blog').append(`<span>EDUARDO=>POO</span><br><p>${respuesta.mensage}</p>`);
    },error:function(error){
      console.error(error);
      console.log("no regreso respuesta");
    }
    });
    //$('#contenedor-blog').append(`hola`);
});
  
  $('#btn-guarar').click(function(){
    console.log("procesando...");
    $('#contenedor-blog').append(`hola`);
    /*
    $.ajax({
      url:"ajax/procesar-blog.php",
      dataType: "json",
      success:function(respuesta){
          console.log(respuesta);
          $('#contenedor-blog').append(`hola`);
    },error:function(error){
      //Se ejecutara cuando sea erroneo
      console.error(error);
      console.log("no regreso respuesta");
    }
    });
    */
  });

  //{"nombre1":"HERNAN","nombre2":"ENRIQUE","apellido":"ORDONEZ","codusuario":"2","correo":"patoserio@mail.com","contrasena":"12345678"}