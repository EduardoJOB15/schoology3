<?php
abstract class Usuario{
    protected $codigoUsuario;
    protected $primerNombre;
    protected $segundoNombre;
    protected $apellido;
    protected $correo;
    protected $contrasena;
    protected $imagen;
}

public function __construct(
    $codigoUsuario,
    $primerNombre,
    $segundoNombre,
    $apellido,
    $correo,
    $contrasena,
    $imagen
){
$this->codigoUsuario = $codigoUsuario;
$this->primerNombre = $primerNombre;
$this->segundoNombre = $segundoNombre;
$this->apellido = $apellido;
$this->correo = $correo;
$this->contrasena = $contrasena;
$this->imagen = $imagen;
}

public function setCodigoUsuario($codigoUsuario){
    $this->codigoUsuario = $codigoUsuario;
};

public function getCodigoUsuario(){
    return $this->codigoUsuario;
};

/*
public function set($){
    $this-> = $;
};

public function get(){
    return $this->;
};
*/ 
public function setPrimerNombre($primerNombre){
    $this->primerNombre = $primerNombre;
};

public function getPrimerNombre(){
    return $this->primerNombre;
};

public function setSegundoNombre($segundoNombre){
    $this->segundoNombre = $segundoNombre;
};

public function getSegundoNombre(){
    return $this->segundoNombre;
};
public function setApellido($apellido){
    $this->apellido = $apellido;
};

public function getApellido(){
    return $this->apellido;
};
public function setCorreo($correo){
    $this->correo = $correo;
};

public function getCorreo(){
    return $this->correo;
};
public function setContrasena($contrasena){
    $this->contrasena = $contrasena;
};

public function getContrasena(){
    return $this->contrasena;
};
public function setImagen($imagen){
    $this->imagen = $imagen;
};

public function getImagen(){
    return $this->imagen;
};

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

?>