<?php
include("class-usuario.php");
include("class-escuela.php");
class Instructor extends Usuario{
    private $escuela;


public function __construct(
    $codigoUsuario,
    $primerNombre,
    $segundoNombre,
    $apellido,
    $correo,
    $contrasena,
    $imagen,
    $escuela){
        parent::__construct(
            $codigoUsuario,
            $primerNombre,
            $segundoNombre,
            $apellido,
            $correo,
            $contrasena,
            $imagen
        );
    $this->escuela = $escuela;
}

public function setEscuela($escuela){
$this->escuela = $escuela;
};

public function getEscuela(){
    return $this->escuela;
};

public function __toString(){
    $a["codigoUsuario"] = $this->codigoUsuario;
    $a["primerNombre"] = $this->primerNombre;
    $a["segundoNombre"] = $this->segundoNombre;
    $a["apellido"] = $this->apellido;
    $a["correo"] = $this->correo;
    $a["contrasena"] = $this->contrasena;
    $a["imagen"] = $this->imagen;
    $a["escuela"] = $this->escuela->toArray();;
    return json_encode($a);
}

}
?>