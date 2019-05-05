<?php
	$host="127.0.0.1";
	$usuario="root";
	$contrasena="";
    $baseDatos="schoology";
    $comp = "no comparo";
    $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
    //$num = $_POST["contrasena"];
$resultado3 = mysqli_query( $link, "SELECT nombre1, nombre2, apellido FROM usuario WHERE contrasena=2");
$res = mysqli_fetch_array($resultado3);

$archivo = fopen('data/usuarioactivo.json','a+'); //r Lectura, w Escritura, a+ Anexar
fwrite($archivo,'{"nombre1"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["nombre1"]);
    fwrite($archivo,'",');
    fwrite($archivo,'"nombre2"');
    fwrite($archivo,':"');
    fwrite($archivo,$res["nombre2"]);
    fwrite($archivo,'"}');
        
fclose($archivo);
mysqli_close($link);
echo '{"status":1,"mensaje":"se seteo el usuario activo"}';

?>