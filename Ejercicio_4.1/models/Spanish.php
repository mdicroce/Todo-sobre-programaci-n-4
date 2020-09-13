<?php
    
    namespace models;
    include_once "Greet.php";
    class Spanish extends Greet{
        public function __construct()
        {
            parent::__construct("Hola, ¿todo bien?","nos vemos luego, chau");
        }
    }
?> 