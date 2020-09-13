<?php 
    $array_aux = array("nombre" => $_POST["nombre"], "edad" => $_POST["edad"], "sexo" => $_POST["sexo"]);
    echo var_dump($array_aux);
    $personas = array();
    array_push($personas, $array_aux);
    
    echo var_dump($personas);
?>