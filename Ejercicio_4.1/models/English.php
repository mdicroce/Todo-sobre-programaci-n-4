<?php
    namespace models;

    include_once "Greet.php";
    class English extends Greet
    {
        public function __construct()
        {
            parent::__construct("Hi, how are you?","see you later, mate");
        }
    }
    
?>