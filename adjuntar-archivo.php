<?php
	$host="127.0.0.1";
	$usuario="root";
	$contrasena="";
    $baseDatos="schoology";
    $comp = "no comparo";
    $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
    $num = $_POST["contrasena"];
$resultado3 = mysqli_query( $link, "SELECT nombre1, nombre2, apellido, codusuario, correo, contrasena FROM usuario WHERE contrasena=$num");
$res = mysqli_fetch_array($resultado3);

$archivo = fopen('data/usuarioactivo.json','a+'); //r Lectura, w Escritura, a+ Anexar
fwrite($archivo,'{"nombre1"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["nombre1"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"nombre2"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["nombre2"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"apellido"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["apellido"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"codusuario"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["codusuario"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"correo"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["correo"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"contrasena"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["contrasena"]);
    fwrite($archivo,'"}');
        
fclose($archivo);
mysqli_close($link);
echo '{"status":1,"mensaje":"se seteo el usuario activo"}';
//{"nombre1":"HERNAN","nombre2":"ENRIQUE"}
?>