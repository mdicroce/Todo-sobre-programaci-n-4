<?php 

    namespace models;

    class Spanish extends Greet
    {

        public function sayHi(){
            $this->setMsg("Hola, como estas?");
        }

        public function sayGoodBye(){
            $this->setMsg("Adios, que tengas un buen dia!");
        }

        function sayOther($msg){
            $this->setMsg($msg);
        }

    }

?>