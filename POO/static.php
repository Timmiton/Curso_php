<?php


# La palabra reservada static nos sirve para poder acceder a las propiedades y metodos sin necesidad de instanciarlos
# Podemos acceder directamente con Nombre_Clase::Nombre_Propiedad    y    Nombre_Clase::Nombre_Metodo();

    class Persona{
        public static $dia = '7 de Noviembre';
        public static function Saludo($nombre = null){
            if($nombre != null){
                return 'Hola! ' . $nombre;
            }
            else{
                return 'Hola Anonimo!';
            }
        }
    }

    
//    echo Persona::Saludo();

    $ismael = new Persona;
    echo $ismael->saludo('Odette');
    echo '<br/>';
    echo Persona::Saludo();
?>