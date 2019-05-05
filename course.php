<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Course | Schoology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/costum.css" rel="stylesheet">
    <link href="css/estilos1.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>
<?php
include("barra-superior.php");?>

<!--   cuerpo  -->


<!-- div's ocultos -->
<!-- esto se puede en html y javaScrip, mirar: "anotaciones personales.txt" -->
<!--  para mejor conrol modificar esto en Js en el 2do parcial -->
<div class="container-fluid">
    <!-- Example row of columns -->
    <div class="row">
      <!--menu de items-->
      <div class="col-xl-2">
          <a style="margin-top: 15px"><img src="img/curso1.png"></a>
    
          <button type="button" id="btn-materiales" class="border-top border-bottom border-left border-right-0" style="background: transparent;margin-top: 5px">
            <a class="inf"><img src="img/materials.png"><span>Materials</span></a>
          </button>
     
          <button type="button" id="btn-updates" class="border-top border-bottom border-left border-right-0" style="background: transparent;margin-top: 5px">
          <a class="inf"><img src="img/updates.png"><span>Updates</span></a>
          </button><br>
    
          <button type="button" id="btn-grades" class="border-top border-bottom border-left border-right-0" style="background: transparent;margin-top: 5px">
          <a class="inf"><img src="img/grades.png"><span>Grades</span></a>
          </button>
     
          <button type="button" id="btn-attendance" class="border-top border-bottom border-left border-right-0" style="background: transparent;margin-top: 5px">
          <a class="inf"><img src="img/attendance.png"><span>Attendance</span></a>
          </button>
    
         <button type="button" id="btn-members" class="border-top border-bottom border-left border-right-0" style="background: transparent;margin-top: 5px">
         <a class="inf"><img src="img/members.png"><span>Members</span></a>
         </button>
      </div>
           <!--fin de menu--> 
      <div id="info1" class="col-xl-10">
          <div class="alert border">
            <div class="row">
              <a><span>IS410-Programacion Orientada a Objetos: I-2019</span><img src="img/icono-cuaderno.png"></a>
              <button type="button" style="margin-left: 50%"><a><img src="img/sobre.png"><span> Notifications</span></a></button>
              <hr>
            </div>
            <!-- contenido debajo de h1 -->
            <hr>
            <div class="conteiner-fluid">
              <div class="row">
                <div class="col-xl-8 border-right">
                   <div></div>
                   <hr>
                   <div class="row">
                    <!-- ancla para la carpeta documentos -->
                       <button type="button" style="margin-right: 2px"></button><img src="img/folder.png" style="height: 20px"><a style="margin-left: 2px">Documentos</a>
                     <!---->
                   </div>
                   <hr>
                   <div class="row">
                    <!-- ancla para la carpeta documentos -->
                       <button type="button" style="margin-right: 2px"></button><img src="img/folder.png" style="height: 20px"><a style="margin-left: 2px">Enunciados</a>
                     <!---->
                   </div>
                   <hr>
                  <div class="row">
                     <!-- ancla para la carpeta documentos -->
                        <button type="button" style="margin-right: 2px"></button><img src="img/folder.png" style="height: 20px"><a style="margin-left: 2px">Enregas</a>
                      <!---->
                  </div>
                  <hr>
                  <div class="row">
                     <!-- ancla para el blog -->
                       <div class="col-xl-1">
                         <img src="img/blog-icon.png">
                       </div>
                       <div class="col-xl-7">
                         <a>Equipos para el proyecto</a>
                         <p>Comentar los equipos para el proyecto bajo este foro. Límite es de dos personas.</p>
                         <span>Due Tuesday, June 12, 2018 at 12:59 am</span>
                       </div>
                      <!---->
                   </div>
                   <hr>
                   <div class="row">
                      <!-- ancla para github -->
                         <img src="img/github-icon.png" style="height: 20px"><a style="margin-left: 5px">Repositorio de ejercicios de clase</a>
                       <!---->
                     </div>
                   <hr>
                </div>

                <div class="col-xl-2">
                  <p style="font-weight: bold">Upcoming .<span><a><img src="img/attendance.png"></a></span></p>
                  <hr>
                  <p>No upcoming assignments or events</p>
                </div>
            <!-- fin div grande -->
          </div>
        </div>
        <!--      ejemplo gia:   
          <div class="col-sm-4 col-xs well">
            <button type="button" class="btn-lista"><a href="#info1" class="inf"><img src="img/members.png">esta</a><span><button type="button"></button></span></button>
          </div>

          <div id="info1" class="col-xs-12 well oculto">
              <p>Texto 1</p>
            </div>
           -->
    </div>
    <hr>
  </div> <!-- /container -->
<!--fin de info1-->
   <div id="info2" class="col-xl-10">
     <div class="alert border">
        <div class="row">
            <a><span>IS410-Programacion Orientada a Objetos: I-2019</span><img src="img/icono-cuaderno.png"></a>
            <button type="button" style="margin-left: 50%"><a><img src="img/sobre.png"><span> Notifications</span></a></button>
            <hr>
          </div>
          <!--bajo h1-->
          <hr>
          <div class="conteiner-fluid">
            <div class="row">
              <div class="col-xl-8 border-right">
                <textarea id="txt-post" class="col-xl-8"></textarea><br/>
                <button id="btn-postear" type="button" style="background-color:#559FDE"><span class="text-light">Post</span></button>
                <div id="blogin"></div>
              </div>
              <div class="col-xl-2">
                  <p style="font-weight: bold">Upcoming .<span><a><img src="img/attendance.png"></a></span></p>
                  <hr>
                  <p>No upcoming assignments or events</p>
              </div>
            </div>
          </div>
     </div>
   </div>
   <!--fin de info2-->
   <div id="info3" class="col-xl-10">
     <div class="alert border">
       <a id="ancla-drades">IS410-Programacion Orientada a Objetos: I ...</a>
       <h1>IS410-Programacion Orientada a Objetos: I ...</h1>
       <hr>
       <div></div>
       <hr>
       <div class="row">
         <div class="col-xl-5">
           <!--ancla para menu desplegable-->
           <a>(no grading period)<span>(0%)</span></a>
           <!---->
         </div>
         <div class="col-xl-5">
          <!--futuro objeso JS-->
            <p style="text-align:center">-</p>
          <!---->
         </div>
       </div>
       <div class="alert alert-dark" role="alert">
         <div class="row">
           <p style="margin-left: 42%">Curse Grade:</p><span>N/A</span>
        </div>
       </div>
     </div>
   </div>
   <!--fin de info3-->
   <div id="info4" class="col-xl-10">
     <div class="alert border">
        <a id="ancla-drades">IS410-Programacion Orientada a Objetos: I ...</a>
        <h1>IS410-Programacion Orientada a Objetos: I ...</h1>
        <hr>
        <div></div>
        <div clas="conteiner-fluid">
            <div class="row">
             <div class="col-xl-8">
               <hr>
                <div class="row">
                    <p style="margin-left: 7px">Absent</p><span style="margin-left: 5px">0</span><p style="margin-left: 20%">Late</p><span style="margin-left: 5px">0</span><p style="margin-left: 20%">Excused</p><span style="margin-left: 5px">0</span>
                  </div>
                  <hr>
                  <div class="row">
                      <p style="margin-left: 7px">None</p><p style="margin-left: 23%">None</p><p style="margin-left: 20%">None</p>
                  </div>
                  <p style="margin-top: 5%">Coments</p>
                  <div class="alert alert-dark" role="alert">
                      <div class="row">
                        <p style="margin-left: 42%">No coments</p>
                     </div>
                    </div> 
             </div>
            </div>
          </div>
        <hr>
           <div class="col-xl-2"></div>
     </div>
   </div>
<!--fin de info4-->
   <div id="info5" class="col-xl-10">
    <div class="alert border">
      <div class="row">
        <a id="ancla-drades">IS410-Programacion Orientada a Objetos: I ...</a>
        <button type="button" style="margin-left: 55%"><a><img src="img/sobre.png"><span> Notifications</span></a></button>
      </div>
        <h1>IS410-Programacion Orientada a Objetos: I ...</h1>
        <hr>
        <div></div>
        <div class="row">
          <button type="button" style="background-color:#559FDE"><span style="color:white">All</span></button>
          <label style="margin-left: 15px"><a>Members</a></label>
          <label style="margin-left: 15px"><a>Admins</a></label>
          <!--barra de busqueda-->
          <nav class="navbar navbar-light bg-light" style="margin-left: 555px">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
              </form>
            </nav>
        </div>
        <hr>
       <div class="row">
         <div class="col-xl-8 border-right">Miembros</div>
         <div class="col-xl-2">Avisos</div>
       </div> 
    </div>
   </div>

<!-- fin de divs's ocultos -->

<!--   fin de cuerpo   -->  
<?php
include("barra-inferior.php");?>
<script>
//ESTE SCRIPT NO REACCIONA SI LO PONGO EN EL CONTROLADOR, NO SE PORQUE
$('#btn-postear').click(function poner6(){
    console.log("hola");
    var parametros ='mensage='+$('#txt-post').val();
    console.log(parametros);
    $.ajax({
    url:"ajax/procesar-course.php",
    method:"POST",
    data:parametros,
    dataType: "json",
    success:function(respuesta){
      console.log(respuesta);
      $('#blogin').append(`<span>EDUARDO=>POO</span><br><p>${$('#txt-post').val()}</p>`);
  },error:function(error){
    //Se ejecutara cuando sea erroneo
    console.error(error);
    console.log("no regreso respuesta");
  }
  });
   
});
</script>
<script src="js/course-controlador.js"></script>
</body>
</html>