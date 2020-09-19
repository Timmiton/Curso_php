<?php


# Las clases abstractas se declaran con abstract class, y sirven para proteger la clase para que no se puede acceder a ella
# Y la manera en la que se pueda acceder a ella es solo si se hereda
    abstract class Persona{
        public function Saludo(){
            return 'Hola';
        }
    }

    class Usuario extends Persona{

    }

    $carlos = new Usuario;
    echo $carlos->Saludo();
?>