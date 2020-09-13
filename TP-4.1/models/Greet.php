<?php

    namespace models;

    abstract class Greet
    {
        private $msg;

        abstract function sayHi();
        abstract function sayGoodBye();
        abstract function sayOther($msg);

        function __construct(){}

        function getMsg()
        {
            return $this->msg;
        }

        function setMsg($msg)
        {
            $this->msg = $msg;
        }
    }

?>