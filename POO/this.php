<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $this->pais . '<br/>';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos';
$carlos->edad = 23;
$carlos->pais = 'Mexico';

$carlos->mostrarInformacion();

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->pais = 'España';

$alejandro->mostrarInformacion();
?>