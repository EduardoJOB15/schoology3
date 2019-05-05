<?php

$host="127.0.0.1";
$usuario="root";
$contrasena="";
$baseDatos="schoology";

$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);

$resultado = mysqli_query( $link, "SELECT nombre1, nombre2, apellido FROM usuario");
for($i=1;$i<3;$i++){
    $fila = mysqli_fetch_array($resultado);
    $respuesta[] = $fila;
};


mysqli_close($link);

echo json_encode($respuesta);

?>