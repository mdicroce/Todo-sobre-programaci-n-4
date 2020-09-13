<?php

use models\English;
use models\Portuguese;
use models\Spanish;

require_once("config/autoload.php");



if($_POST){

    if(isset($_POST['lang']) && isset($_POST['msg'])){

        $lang = $_POST['lang'];
        $type = $_POST['msg'];
        $other = $_POST['otherMsg'];

        $obj = null;

        if($lang == "es"){
            $obj = new Spanish();
        }else if($lang == "en"){
            $obj = new English();
        }else{
            $obj = new Portuguese();
        }

        /* Otra forma

            Ternario anidado:

        $obj = $lang == "es" ? new Spanish() : ($lang == "en" ? new English() : new Portuguese());

        */

        if($type == "sayOther"){

            $text = !empty($other) ? $other : "Olvidaste escribir un mensaje";

            /*  1° param: array que contiene el objeto, con el nombre de la funcion a la que se invoca
                2° param: parametro que se envia a la funcion invocada del objeto. */
            call_user_func(array($obj, $type), $text);

        }else{
            call_user_func(array($obj, $type));
        }

        // Si llego a este punto implica que ya tengo mi obj creado, con el mensaje asignado.
        // Dentro de 'greet.php' puedo hacer uso de $obj
        include_once("greet.php");

    }else{
        echo "<script> if(confirm('Debe seleccionar idioma y/o tipo de mensaje'));";
        echo "window.location = 'index.php'; </script>";
    }

}

?>