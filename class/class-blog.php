<?php
include("class-curso.php");
include("class-alumno.php");
include("class-instructor.php");
include("class-usuario.php");
class Blog{
    //el blog de facultad sera arrastrar todos los usuarios existentes a un php.
    //esta clase maneja todo lo relacionado al posteo
    private $codMensaje;
    private $fecha;
    private $mensaje;
    private $codigoCurso;
    private $codigoUsuario;
    //solo necesita el codCurso, no necesita todo un curso, cada vez que se postee se deve pedir el codCurso
    //solo para llenar este campo en php,ya que en la base de datos es una llave foranea

    public function __construct(
        $codMensaje,
        $fecha,
        $mensaje,
        $codigoCurso,
        $codigoUsuario
    ){
        $this->codMensaje = $codMensaje;
        $this->fecha = $fecha;
        $this->mensaje = $mensaje;
        $this->codigoCurso = $codigoCurso;
        $this->codigoUsuario = $codigoUsuario;

    }

    public function __construct(
        $codMensaje,
        $fecha,
        $mensaje
    ){
        $this->codMensaje = $codMensaje;
        $this->fecha = $fecha;
        $this->mensaje = $mensaje;

    }

    public function setCodMensaje($codMensaje){
        $this->codMensaje = $codMensaje;
    };
    
    public function getCodMensaje(){
        return $this->codMensaje;
    };
    public function setFecha($fecha){
        $this->fecha = $fecha;
    };
    
    public function getFecha(){
        return $this->fecha;
    };
    public function setMensaje($mensaje){
        $this->mensaje = $mensaje;
    };
    
    public function getMensaje(){
        return $this->mensaje;
    };

    public function __toString(){
        $a["codMensaje"] = $this->codMensaje;
        $a["fecha"] = $this->fecha;
        $a["mensaje"] = $this->mensaje;
        return json_encode($a);
    }
}
?>