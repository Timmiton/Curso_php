<?php

# SCOPE :
# public :  Con public puedes acceder desde cualquier parte del codigo, dentro y fuera de la clase
# protected : Con protected solo se puede acceder desde dentro de la clase y desde otras clases que heredaron
# private : Con private solo podemos acceder desde dentro de la clase que fue creada

    class Usuario{
        public $nombre;
        protected $correo;
        function __construct($nombre,$correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }
        public function mostrarInfo(){
            return $this->correo;
        }
    }

    class Miembro extends Usuario{
        public function mostrarCorreo(){
            return 'Este es el correo: ' . $this->correo;
        }
    }

    $carlos = new Miembro('Carlos', 'carlos132@gmail.com');
    echo $carlos->mostrarCorreo();
?>