<?php

$host="127.0.0.1";
$usuario="root";
$contrasena="";
$baseDatos="schoology";

$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);
//$respuesta = array();
$resultado = mysqli_query( $link, "SELECT codcurso, codusuario, fecha, mensage FROM blog");
$fila = mysqli_fetch_array($resultado);
$respuesta = $fila;



mysqli_close($link);
//echo $respuesta["mensage"];
echo json_encode($respuesta);

?>