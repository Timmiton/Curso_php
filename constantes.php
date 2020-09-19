<?php

#Las constantes no se puedes sobreescribir por lo que si le asignamos dos valores marcara error
#Las constantes son buenas para el Scope

define('PI', 3.14);
define('NOMBRE', "Ismael");
echo PI;
echo NOMBRE;
?>