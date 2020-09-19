<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;
    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $this->pais . '<br/>';
    }
}

$carlos = new Persona('Carlos', 23, 'Mexico');
/* $carlos->nombre = 'Carlos';
$carlos->edad = 23;
$carlos->pais = 'Mexico'; */

$carlos->mostrarInformacion();

$alejandro = new Persona('Alejandro', 30, 'España');
/* $alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->pais = 'España'; */

$alejandro->mostrarInformacion();

?>