<?php

# Para poder encadenar Metodos tenemos que agregar un return $this al final de cada metodo que queremos encadenar
# La forma de encadenarlos es instancear $variable->metodo1()->metodo2()->metodo3....;

    class Usuario{
        public $nombre;
        public $correo;
        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }
        public function mostrarNombre(){
            echo 'Su nombre es: ' . $this->nombre . '<br/>';
            return $this;
        }
        public function mostrarCorreo(){
            echo 'Su correo es: ' . $this->correo . '<br/>';
            return $this;
        }
    }

    $ismael = new Usuario('Ismael Ortega', 'ismaelortega1@hotmail.com');
    $ismael->mostrarNombre()->mostrarCorreo();

?>