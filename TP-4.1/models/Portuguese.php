<?php 

    namespace models;

    class Portuguese extends Greet
    {

        public function sayHi(){
            $this->setMsg("Oi, como vai?");
        }

        public function sayGoodBye(){
            $this->setMsg("Adeus, tenha um bom dia!");
        }

        function sayOther($msg){
            $this->setMsg($msg);
        }

    }

?>