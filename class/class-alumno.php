<?php
include("class-usuario.php");
class Alumno extends Usuario{
    
public function __construct(
    $codigoUsuario,
    $primerNombre,
    $segundoNombre,
    $apellido,
    $correo,
    $contrasena,
    $imagen){
        parent::__construct(
            $codigoUsuario,
            $primerNombre,
            $segundoNombre,
            $apellido,
            $correo,
            $contrasena,
            $imagen
        );
}


public function __toString(){
    $a["codigoUsuario"] = $this->codigoUsuario;
    $a["primerNombre"] = $this->primerNombre;
    $a["segundoNombre"] = $this->segundoNombre;
    $a["apellido"] = $this->apellido;
    $a["correo"] = $this->correo;
    $a["contrasena"] = $this->contrasena;
    $a["imagen"] = $this->imagen;
    return json_encode($a);
}

}
?>