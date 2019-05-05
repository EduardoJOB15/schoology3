<?php
class Escuela{
    private $codEscuela;
    private $nombre;
    private $website;
    private $adress;
    //lleva el blog de facultad

    public function __construct(
        $codEscuela,
        $nombre,
        $website,
        $adress
    ){
        $this->codEscuela = $codEscuela;
        $this->nombre = $nombre;
        $this->website = $website;
        $this->adress = $adress;
    };


    public function setCodEscuela($codEscuela){
        $this->codEscuela = $codEscuela;
    };
    
    public function getCodEscuela(){
        return $this->codEscuela;
    };

    public function setNombre($nombre){
        $this->nombre = $nombre;
    };
    
    public function getNombre(){
        return $this->nombre;
    };

    public function setWebsite($website){
        $this->website = $website;
    };
    
    public function getWebsite(){
        return $this->website;
    };

    public function setAdress($adress){
        $this->adress = $adress;
    };
    
    public function getAdress(){
        return $this->adress;
    };

    public function __toString(){
        $a["codEscuela"] = $this->codEscuela;
        $a["nombre"] = $this->nombre;
        $a["website"] = $this->website;
        $a["adress"] = $this->adress;
        return json_encode($a);
    }
}
?>