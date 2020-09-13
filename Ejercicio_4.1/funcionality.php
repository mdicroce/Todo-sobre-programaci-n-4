<?php
    include_once "./models/English.php";
    include_once "./models/Spanish.php";
    include_once "./models/Portuguese.php";
    use models\English as English;
    use models\Spanish as Spanish;
    use models\Portuguese as Portuguese;

    
    $lengua = $_GET["lang"];
    $accion = $_GET["action"];
    $message = $_GET["message"];
    $aux = new English();
    $lenguas = array("eng" => new English(), "arg" => new Spanish(), "port" => new Portuguese());
    $MensajeAMostrar = $lenguas[$lengua]->{$accion}($message);
    include "./greet.php";
    
?>