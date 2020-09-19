<?php

/*$nombre = 'Carlos';
$edad = 24;
$pais = 'Mexico';

$nombre2 = 'Alejadro';
$edad2 = 23;
$pais2 = 'EUA' */


# Las clases tienen propiedades que son variables y tiene metodos que son funciones.

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'Mexico';
$carlos->mostrarInformacion();

echo '<br/> '. $carlos->nombre . ' tiene ' .  $carlos->edad . ' años' . ' y vive en ' . $carlos->pais;

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro Jose';
$alejandro->edad = 30;
$alejandro->pais = 'Estados Unidos';

?>