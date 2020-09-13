<?php
    namespace models;

    class Portuguese extends Greet
    {
        public function __construct()
        {
            parent::__construct("Oi, como vai?","Adeus, tenha um bom dia!");
        }
    }
?> 