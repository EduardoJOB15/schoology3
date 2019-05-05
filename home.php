<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Schoology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--
    <link href="css/costum.css" rel="stylesheet">
    -->
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    
        <style>
                .btn-button{
                  background-color: #2880c5; 
                  border-color: #2880c5; 
                  cursor: pointer;
                }
          
                .btn-button:hover{
                  background-color: #1b5683;
                  border-color: #1b5683;
                }
          
                #letra{
                  color: white;
                }
          
                .sub:hover{
                  text-decoration: underline;
                }
          
                .btn-lista{
                  background-color: transparent;
                }
                .div-mayor{
                  background: #64831b;
                }
                #btn-post{
                  background-color: #2880c5; 
                  border-color: #2880c5; 
                  cursor: pointer;
                  margin-left: 420px
                }
                #ancla-grades{
                  margin-left: 20px;
                  margin-top: 20px;
                }
              </style>
          </head>
          <body>
            <header>
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2880c5">
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="140" height="30" style="padding-bottom: 5px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="btn-group btn-group-toggle " data-toggle="buttons" >
                  <label class="btn btn-primary btn-button"> 
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> COURSES
                  </label>
                  <label class="btn btn-primary btn-button">
                    <input type="radio" name="options" id="option2" autocomplete="off"> GROUPS
                  </label>
                  <label class="btn btn-primary btn-button">
                    <input type="radio" name="options" id="option3" autocomplete="off"> RESOURCES
                  </label>
                  <label class="btn btn-primary btn-button">
                    <input type="radio" name="options" id="option3" autocomplete="off"> GRADES
                  </label>
                </div>
                <div class="btn-group btn-group-toggle " data-toggle="buttons" >
                    <label class="btn btn-primary btn-button" style="margin-left: 460px"> 
                      <input type="radio" name="options" id="option1" autocomplete="off" checked><img src="img/lupa.png" style="width: 30px">
                    </label>
                    <label class="btn btn-primary btn-button">
                      <input type="radio" name="options" id="option2" autocomplete="off"><img src="img/calendary.png" style="width: 30px">
                    </label>
                    <label class="btn btn-primary btn-button">
                      <input type="radio" name="options" id="option3" autocomplete="off"><img src="img/mensaje.png" style="width: 30px">
                    </label>
                    <label class="btn btn-primary btn-button">
                      <input type="radio" name="options" id="option3" autocomplete="off"><img src="img/campana.png" style="width: 30px">
                    </label>
                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle btn-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @Usuario
                    </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Your Profile</a>
                  <a class="dropdown-item" href="#">Universidad Nacional Autonoma de Honduras</a>
                  <a class="dropdown-item" href="#">Setting</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </nav>
            </header>

   <!--body-->         
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="row">
                  <a style="margin-left: 15px;margin-top: 20px"><span>RESENT ACTIVITY</span></a>
                  <a style="margin-left: 35px;margin-top: 20px"><span>COURSE DASHBOARD</span></a>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-8 btn btn-light" id="contenido">
          <div class="row">
              <p style="margin-left: 55px">Post:</p>
                <button type="button" class="btn btn-default" style="margin-left: 2px"><a><img src="img/attendance.png">Event</a></button>
                
          </div>
          <div id="contenedor-blog" style="margin-left:-75%">

                </div>

        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-3 btn btn-light">
            Upcoming
            <hr>
           <p>MONDAY, MARCH 11, 2019</p>
           <hr>
           <a><img src="img/attendance.png"></a><span style="margin-left: 15px">Primer avance proyecto</span><br>
           <p style="margin-left: 40px">1:00 pm</p> 
        </div>
      </div>
    </div>
   <!--fin body-->
   <footer>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1b5683; margin-top: 541px">
            <a class="navbar-brand sub" href="#" id="letra" style="padding-bottom: 6px; font-size: 1rem">English</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link sub" href="#" style="padding-left:590px" id="letra">Support</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sub" href="#" id="letra">Schoology Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sub" href="#" id="letra">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="#" id="letra">Terms of Use</a>
                </li>
                <h1 style="font-size: 0.9rem; padding-top: 10px; height: 30px; width: 120px; margin-left: 90px; color: white">Schoology © 2019</h1>
              </ul>
            </div>
          </nav>
    </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/home1-controlador.js"></script>   
</body>
</html>