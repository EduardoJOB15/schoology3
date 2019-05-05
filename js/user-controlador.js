$(document).ready(function(){
    //Se ejecuta cuando el DOM este cargado completamente
    mostrarinicio();
    //aqui deve ir el ajax de carga de materiales
    
});
function mostrarinicio(){
    $.ajax({
        url:"ajax/procesar-user.php",
        method:"POST",
        dataType: "json",
        success:function(respuesta){
           console.log(respuesta.codusuario);
           $('#div-informacion').append(`<span class="birthday">Email</span><span class="email"><a href="#">${respuesta.correo}</a></span><img src="img/msj.png" class="msj1">`);
      },error:function(error){
        //Se ejecutara cuando sea erroneo
        console.error(error);
        console.log("no regreso respuesta");
      }
      });
  };