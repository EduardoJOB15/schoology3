<?php


$archivo = fopen('data/usuarioactivo.json','r'); //r Lectura, w Escritura, a+ Anexar
$linea=fgets($archivo)
$respuesta = json_decode($linea,true);
echo json_encode($respuesta);
fclose($archivo);
//{"nombre1":"HERNAN","nombre2":"ENRIQUE"}
?>