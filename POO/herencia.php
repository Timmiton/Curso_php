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
        return $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $this->pais . '<br/>';
    }
}

#La herencia es Pasar las propiedades y metodos de una clase a otra clase con la palabra extends

class Estudiante extends Persona {
    public $carrera;
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre,$edad,$pais);
        $this->carrera = $carrera;
    }
    public function mostrarCarrera(){
        return $this->carrera;
    }
}

class Trabajador extends Persona {
    public $trabajo;
    function __construct($nombre,$edad,$pais,$trabajo){
        parent::__construct($nombre,$edad,$pais);
        $this->trabajo = $trabajo;
    }
    public function mostrarTrabajo(){
        return $this->trabajo;
    }
}

$carlos = new Persona('Carlos Arturo', 23, 'Mexico');
echo $carlos->mostrarInformacion();

$alejandro = new Estudiante('Alejandro', 25, 'España', 'Programador');
echo $alejandro->mostrarInformacion() . 'y es un ' . $alejandro->mostrarCarrera() . '</br>';

$ismael = new Trabajador('Ismael', 20, 'Mexico', 'Desarrollador Web');
echo $ismael->mostrarInformacion() . 'y trabaja como ' . $ismael->mostrarTrabajo();

?>