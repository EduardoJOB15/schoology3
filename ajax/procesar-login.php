<?php
/*
include("../class/class-alumno.php");
include("../class/class-instructor.php");
include("../class/class-escuela.php");
include("../class/class-usuario.php");
include("../class/class-curso.php");
include("../class/class-blog.php");
*/

//

$host="127.0.0.1";
$usuario="root";
$contrasena="";
$baseDatos="schoology";
$respuesta = array();
$comparador["nombre"] = "HERNAN";
$comparador["contrasena"] = "12345678";

/*
FUNCIONO!!!!!
if($_POST["nombre"] == $comparador["nombre"] && $_POST["password"] == $comparador["contrasena"]){
    $respuesta["nombre"] = "si";
    $respuesta["apellido"] = "comparo";
}else{
    $respuesta["nombre"] = "no";
    $respuesta["apellido"] = "comparo";
};
*/

///////////echo json_encode($respuesta);//echo == return


$respuesta["nombre"] = "no";
$respuesta["apellido"] = "comparo";

$usuarioac = array();
$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);

$resultado = mysqli_query( $link, "SELECT codusuario, nombre1, nombre2, apellido, correo, contrasena FROM usuario");
for($i=1;$i<3;$i++){
    $fila = mysqli_fetch_array($resultado);
    //echo "<br>".$fila["nombreescuela"].", website: ".$fila["website"].", direccion: ".$fila["direccion"].", codigo: ".$fila["codescuela"];
    if($fila["nombre1"] == $_POST["nombre"] && $fila["contrasena"] == $_POST["password"]){
    $respuesta["nombre"] = "si";
    $respuesta["apellido"] = "comparo";
    $usuarioac["codusuario"] = $fila["codusuario"];
    $usuarioac["nombre1"] = $fila["nombre1"];
    $usuarioac["apellido"] = $fila["apellido"];
    $usuarioac["correo"] = $fila["correo"];
    $usuarioac["contrasena"] = $fila["contrasena"];
    }else{
       $respuesta["nombre"] = "no";
       $respuesta["apellido"] = "comparo"; 
    };
};


mysqli_close($link);

echo json_encode($usuarioac);


?>