<?php
$host="127.0.0.1";
$usuario="root";
$contrasena="";
$baseDatos="schoology";
$ci;
$archivo = fopen("../data/usuarioactivo.json","r");
$linea = fgets($archivo);
$persona = json_decode($linea,true);
//echo $persona["nombre1"];
$ci=$persona["codusuario"];
fclose($archivo);


$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
$cc;
$n=$_POST["mensage"];
//$sc=$_POST["seccion"];
//$ar=$_POST["area"];
//$nv=$_POST["nivel"];
mysqli_query( $link, "INSERT INTO blog VALUES (1,'$ci','2','2013-11-24 17:15:10','$n')");
mysqli_close($link);

echo '{"status":1,"mensaje":"curso guardado en la base de datos"}';

?>