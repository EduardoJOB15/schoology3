<?php
include("class-instructor.php");
include("class-instructor.php");
include("class-instructor.php");

class Curso{
    private $codCurso;
    private $nombre;
    private $seccion;
    private $area;
    private $nivel;
    private $instructor;
    private $alumnos = array();

    public function __construc(
        $codCurso,
        $nombre,
        $seccion,
        $area,
        $nivel,
        $instructor){
            $this->codCurso = $codCurso;
            $this->nombre = $nombre;
            $this->seccion = $seccion;
            $this->area = $area;
            $this->nivel = $nivel;
            $this->instructor = $instructor;
        }
    
    public function agregarAlumno($nuevoAlumno){
        array_push($alumnos,$nuevoAlumno);
        //notar que no le puse ""
    };
    
    public function eliminarAlumo(){
        //logica
    };

    public function setCodCurso($codCurso){
        $this->codCurso = $codCurso;
    };
    
    public function getCodCurso(){
        return $this->codCurso;
    };
    public function setNombre($nombre){
        $this->nombre = $nombre;
    };
    
    public function getNombre(){
        return $this->nombre;
    };
    public function setSeccion($seccion){
        $this->seccion = $seccion;
    };
    
    public function getSeccion(){
        return $this->seccion;
    };
    public function setArea($area){
        $this->area = $area;
    };
    
    public function getArea(){
        return $this->area;
    };
    public function setNivel($nivel){
        $this->nivel = $nivel;
    };
    
    public function getNivel(){
        return $this->nivel;
    };
    public function setInstructor($instructor){
        $this->instructor = $instructor;
    };
    
    public function getInstructor(){
        return $this->instructor;
    };

    public function __toString(){
        $a["codCurso"] = $this->codCurso;
        $a["nombre"] = $this->nombre;
        $a["seccion"] = $this->seccion;
        $a["area"] = $this->area;
        $a["nivel"] = $this->nivel;
        $a["instructor"] = $this->instructor->toArray();;
        return json_encode($a);
    }

    public function listarAlumnos(){
        //logica con un for
    }
}
?>