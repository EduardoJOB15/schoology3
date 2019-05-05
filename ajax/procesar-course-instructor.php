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
$n=$_POST["nombre"];
$sc=$_POST["seccion"];
$ar=$_POST["area"];
$nv=$_POST["nivel"];
mysqli_query( $link, "INSERT INTO curso VALUES (2,'$n','$sc','$ar','$nv','$ci')");
mysqli_close($link);

echo '{"status":1,"mensaje":"curso guardado en la base de datos"}';

?>