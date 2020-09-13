<?php 

    namespace models;

    class English extends Greet
    {

        public function sayHi(){
            $this->setMsg("Hi, how are you?");
        }

        public function sayGoodBye(){
            $this->setMsg("Bye, have a nice day!");
        }

        function sayOther($msg){
            $this->setMsg($msg);
        }

    }

?>