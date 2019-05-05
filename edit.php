<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Profile Info | Schoology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos1.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/edit-controlador.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.6/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.4.2.js"></script>
    <script src="http://code.jquery.com/ui/1.8.6/jquery-ui.js"></script>
    <script type="text/javascript">
      $(function() {
      	$('#dob').datepicker({dateFormat: 'MM dd, yy', changeMonth: true, changeYear: true, yearRange: '-100:+0'});
      });
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light nav-color" style="height: 61px;">
      <a class="navbar-brand" href="home.html"><img src="img/logo.png" width="140" height="30" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="btn-group btn-group-toggle " data-toggle="buttons" >
          <div class="dropdown">
              <a class="btn btn-presionar btn-h btn-grupos letraboton" href="course.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                COURSES
              </a> 
              <div class="dropdown-menu hr11 margen2 dropdown-menu-right">
                <div class="div-margen1">
                  <div class="div-5">
                  <div class="div-grupo">
                    <h2 class="letrap">Courses</h2>
                    <a href="#">My Courses</a>
                  </div>
                  <div class="div-6">
                    <div class="div-7">
                      <article class="articulo">
                        <a href="course.html" style="text-decoration: none">
                          <div class="curso">
                            <img src="img/curso1.png" class="img-curso">
                          </div>
                          <div class="div-curso">
                            <div class="margen0">
                              <div class="letra-curso">IS410-Programacion Orientada a Objetos</div>
                              <div class="letra-curso1">I-2019</div>
                              <div class="letra-curso2">user school</div>
                            </div>
                          </div>
                        </a>
                      </article>
                    </div>
                    <div class="div-7">
                      <article class="articulo">
                        <a href="#" style="text-decoration: none">
                          <div class="curso1">
                            <span class="span-curso">+</span>
                          </div>
                          <div class="div-curso1">
                            <h3 class="unir">Join a Course</h3>
                          </div>
                        </a>
                      </article>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
        <div class="dropdown">
            <a class="btn btn-presionar btn-h btn-grupos letraboton" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GROUPS
            </a> 
            <div class="dropdown-menu hr12 margen1 dropdown-menu-right">
              <div class="div-margen">
              <div class="div-2">
              <div class="div-grupo">
                <h2 class="letrag">Groups</h2>
                <a href="#">My Groups</a>
              </div>
              <div>
                <header class="div-3">
                  <h2 class="letra-grupos">You have not joined any groups</h2>
                  <img src="img/20190310_145406.png" class="avion-papel">
                  <div class="div-4">
                      <button class="boton-grupo">
                        <span class="span-grupo">Join a Group</span>
                      </button>
                  </div>
                </header>
              </div>
              </div>
              </div>
            </div>
        </div>
        <label class="btn btn-presionar btn-grupos letraboton">
          <input type="radio" name="options" id="option3" autocomplete="off"> RESOURCES
        </label>
        <div class="dropdown">
            <a class="btn btn-presionar btn-h btn-grupos letraboton" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GRADES
            </a> 
        <div class="dropdown-menu btn-lista drop-margen1" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item btn-bts1" id="letra" href="#">Grade Report</a>
          <a class="dropdown-item btn-bts1" id="letra" href="#">Attendance</a>
        </div>
      </div>
      <div class="btn-group btn-group-toggle " data-toggle="buttons" >
          <div class="dropdown">
            <a class="btn btn-presionar btn-h btn-grupos margen-lupa" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/lupa.png" class="tamanio-imagen">
            </a>
            <div class="dropdown-menu dropdown-menu-right hr5">
              <li>
                <label class="label1">
                  <div>
                    <img src="img/lupa.png" class="img-lupa">
                  </div>
                  <input type="text" placeholder="Search" class="buscar1" value>
                </label>
              </li>
            </div>
          </div>
          <label class="btn btn-presionar btn-grupos">
            <input type="radio" name="options" id="option2" autocomplete="off"><img src="img/calendary.png" class="tamanio-imagen">
          </label>
          <div class="dropdown">
            <a class="btn btn-presionar btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/mensaje.png" class="tamanio-imagen">
            </a>
            <div class="dropdown-menu dropdown-menu-right hr7">
              <div class="hr6">
                <h3 class="mensaje">Messages</h3>
                <a href="#" style="text-decoration: none;" class="ancla-mensaje">New Message</a>
              </div>
              <div class="dropdown-divider division2"></div>
              <p class="parrafo1">You currently do not have any messages.</p>
            </div>
          </div>
          <div class="dropdown">
              <a class="btn btn-presionar btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/campana.png" class="tamanio-imagen">
              </a>
          <div class="dropdown-menu dropdown-menu-right hr10">
            <div class="hr9">
              <button class="notificacion">Notifications</button>
              <a href="#" style="text-decoration: none;">Requests</a>
            </div>
            <div class="dropdown-divider division"></div>
            <footer>
                <div class="dropdown-divider division1"></div>
                <div class="hr8">
                  <button class="boton1">View All</button>
                </div>
            </footer>
          </div>
      </div>
      <div class="dropdown">
          <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @Usuario
          </a>
      <div class="dropdown-menu dropdown-menu-right btn-lista drop-margen" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item btn-bts" id="letra" href="User.html">Your Profile</a>
        <a class="dropdown-item btn-bts" id="letra" href="#">user school</a>
        <a class="dropdown-item btn-bts" id="letra" href="settings.html">Setting</a>
        <div class="dropdown-divider drop-division"></div>
        <div>
          <li role="presentation">
          <a class="dropdown-item btn-bts" role="menuitem" id="letra" href="login.html"><img src="img/cerrar.png" width="18px" class="cerrar">Logout</a>
          </li>
        </div>
      </div>
    </nav>
</header> 

<!--Inicio-->
<div class="cuadro10">
    <div class="container-fluid cuadro11">
        <div class="cuadro12">
            <div class="cuadro13">
                <div class="cuadro14">
                    <h2 class="Edit0">Edit Profile Info</h2>
                </div>
                <div class="cuadro15">
                    <form role="form" action="" class="formulario">
                        <div>
                           <div class="cuadro16">
                               <a class="tab-nav2 nav03 nav02 active" id="AboutMe1" role="button" aria-pressed="true">
                                   <span class="icono01">
                                       <img src="img/info03.png" class="info03">
                                   </span>
                                   About Me
                                </a>
                               <a class="tab-nav2 nav03 nav02" id="Interests1">
                                    <span class="icono01">
                                        <img src="img/mundo.png" class="info03">
                                    </span>
                                    Interests & Activities
                                </a>
                                <a class="tab-nav2 nav03 nav02" id="contact1">
                                    <span class="icono01">
                                        <img src="img/telefono1.png" class="info03">
                                    </span>
                                    Contact Information
                                </a>
                           </div> 
                        </div>
                        <div class="text1">
                          <div class="profile1 expand-lg" style="display:block;" id="AboutMe2">
                            <div class="bloque1">
                              <label class="input01">Bio: </label>
                              <div class="resizable-textarea">
                                <span>
                                  <textarea cols="60" rows="5" name="profile[about][bio]" id="edit-profile-about-bio" 
                                  class="form-textarea resizable">
                                  </textarea>
                                  <div class="grippie" style="margin-right: -362px;"></div>
                                </span>
                              </div>
                              <div class="areatext">&nbsp;</div>
                            </div>
                            <div class="bloque2">
                                <label class="input01">Gender: </label>
                                <select name="Gender" id="genero1" class="genero">
                                  <option value="0" selected="selected"></option>
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="container-inline-date date-clear-block">
                              <div class="bloque3">
                                  <label class="input01">Birthday: </label>
                                  <div style="cursor: pointer; width: 177px;margin-left: 150px;">
                                    <input type="text" name="dob" id="dob" value="March 15, 1997" style="color: #327cbb; 
                                    cursor: pointer;padding-left: 5px;font-size: 13.5px;padding-top: 5px;padding-right: 5px;
                                    padding-bottom: 5px;width: 172px;border: 1px;border-style: solid;height: 30px;border-color: #c7c7c7;"/>
                                    <img src="img/cal3.png" style="width: 15px; margin-left: -27px; margin-bottom: 3px;">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div id="Interest2" style="display: none;">
                          <div class="bloque1">
                              <label class="input01">Activities: </label>
                              <div class="resizable-textarea">
                                <span>
                                  <textarea cols="60" rows="5" name="profile[about][bio]" id="edit-profile-about-bio" 
                                  class="form-textarea resizable">
                                  </textarea>
                                  <div class="grippie" style="margin-right: -362px;"></div>
                                </span>
                              </div>
                              <div class="areatext">&nbsp;</div>
                          </div>
                          <div class="bloque1">
                              <label class="input01">Interests: </label>
                              <div class="resizable-textarea">
                                <span>
                                  <textarea cols="60" rows="5" name="profile[about][bio]" id="edit-profile-about-bio" 
                                  class="form-textarea resizable">
                                  </textarea>
                                  <div class="grippie" style="margin-right: -362px;"></div>
                                </span>
                              </div>
                              <div class="areatext">&nbsp;</div>
                          </div>
                          </div>
                          <div id="Contact2" style="display: none;">
                            <div class="bloque4">
                             <label class="input01">Email: </label>
                             <div class="bloque5">
                               <span class="correo1">usuario@gmail.com</span>
                               <a href="#" class="correo2">Edit Email (Account Settings)</a>
                             </div>
                            </div>
                            <div class="bloque6">
                             <label class="input01">Phone: </label>
                             <input type="text" maxlenght="128" name="profile[contact][phone]"
                             id="edit-profile-contact-phone" size="60" value class="form-text">
                            </div>
                            <div class="bloque7">
                              <label class="input01">Websites: </label>
                              <div class="resizable-textarea">
                               <span>
                                 <textarea name="profile[contact][website]" id="edit-profile-contact-website" 
                                 cols="60" rows="5" class="website">
                                 </textarea>
                                 <div class="grippie" style="margin-right: -362px;"></div>
                               </span>
                              </div>
                              <div class="areatext">&nbsp;</div>
                            </div>
                          </div>
                        </div>
                        <div class="area1">
                            By clicking<b> Save Changes</b> ,you are agreeing to our
                            <a href="#">Privacy Policy</a> and
                            <a href="#">Terms of Use</a>
                        </div>
                        <div class="area2">
                            <span class="button10 save">
                             <input type="submit" name="op" id="edit-submit" value="Save Changes" value class="Guardar1">
                            </span>
                            <a href="#" class="cancelar active">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin-->

<script>
$().button('toggle');

  (function ocultarinicio(){
        $('#Interest2').fadeOut(1);
        $('#Contact2').fadeOut(1);
      })();

      function quitar1(){
        $('#Interest2').fadeOut(1);
        $('#Contact2').fadeOut(1);
      };
      
      function quitar2(){
        $('#AboutMe2').fadeOut(1);
        $('#Contact2').fadeOut(1);
      };
      
      function quitar3(){
        $('#AboutMe2').fadeOut(1);
        $('#Interest2').fadeOut(1);
      };
      $('#AboutMe1').click(function poner1(){
                  $('#AboutMe2').fadeIn(2);
                  (quitar1())();
              });
      $('#Interests1').click(function poner2(){
                  $('#Interest2').fadeIn(2);
                  (quitar2())();
              });
      $('#contact1').click(function poner3(){
                  $('#Contact2').fadeIn(2);
                  /*aqui falta una ventana emergente*/
                  (quitar3())();
              });
</script>
            
<footer>
    <nav class="navbar navbar-expand-lg navbar-light nav-footer" style="margin-top: 10px;">
        <a class="navbar-brand sub" href="#" id="letra" style="padding-bottom: 6px; font-size: 1rem">English</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item flex">
              <a class="nav-link sub letra-1" href="#" style="padding-left: 8px; margin-left: 595px" id="letra">Support</a>
              <div class="linea">|</div>
            </li>
            <li class="nav-item flex">
              <a class="nav-link sub letra-1" href="#" id="letra">Schoology Blog</a>
              <div class="linea">|</div>
            </li>
            <li class="nav-item flex">
              <a class="nav-link sub letra-1" href="#" id="letra">Privacy Policy</a>
              <div class="linea">|</div>
            </li>
            <li class="nav-item">
              <a class="nav-link sub letra-1" href="#" id="letra">Terms of Use</a>
            </li>
            <h1 class="letraschool">Schoology © 2019</h1>
          </ul>
        </div>
    </nav>
</footer>
</body>
</html>