<?php
    namespace models;
    
    abstract class Greet
    {
        private $sayHI;
        private $sayBye;
        private $anotherMessage;

        public function __construct($sayHi, $sayBye)
        {
            $this->sayHI = $sayHi;
            $this->sayBye = $sayBye;
            
        }
        public function sayHi()
        {
             return $this->sayHi;
        }
        public function sayBye()
        {
            return $this->sayBye;
        }
        public function getMessage($message)
        {
            $this->anotherMessage = $message;
            $this->sayNewMessage();
            
        }
        private function sayNewMessage()
        {
            return $anotherMessage;
        }
        
    }
?>