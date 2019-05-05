<?php

    switch($_GET["accion"]){
        case 'guardarusuario':
        $host="127.0.0.1";
        $usuario="root";
        $contrasena="";
        $baseDatos="schoology";
        $n1=$_GET["nombre1"];
        $ap=$_GET["apellido"];
        $correo=$_GET["correo"];
        $contra=$_GET["contrasena"];
        $codcurso=$_GET["codigocurso"];
        $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
        mysqli_query( $link, "INSERT INTO usuario VALUES (5,'$n1',null,'$ap','$correo','$contra',null)");
        mysqli_query( $link, "INSERT INTO alumnado VALUES (5,'$codcurso')");
        mysqli_close($link);
        echo '{"status":1,"mensaje":"estudiante guardado en la base de datos"}';
        break;

        case 'guardarinstructor':
        $host="127.0.0.1";
        $usuario="root";
        $contrasena="";
        $baseDatos="schoology";
        $n1=$_GET["nombre1"];
        $ap=$_GET["apellido"];
        $correo=$_GET["correo"];
        $contra=$_GET["contrasena"];
        $codescuela=$_GET["codigoescuela"];
        $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
        mysqli_query( $link, "INSERT INTO usuario VALUES (5,'$n1',null,'$ap','$correo','$contra',null)");
        mysqli_query( $link, "INSERT INTO instructores VALUES (5,'$codescuela')");


        mysqli_close($link);
        echo '{"status":1,"mensaje":"estudiante guardado en la base de datos"}';
            break;
        default:
            echo '{"status":0,"mensaje":"Acción no válida"}';
    }
    

?>