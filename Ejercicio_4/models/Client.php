<?php
    namespace models;

    class Client extends Person{
        private $userName;
        private $passWord;

        public function __constructor($id, $firstName, $lastName, $dni, $email, $userName, $passWord)
        {
            parent::__constructor($id, $firstName, $lastName, $dni,$email);
            $this->userName = $userName;
            $this->password = $passWord;
        }

        public function getUserName()
        {
            return $this->userName;
        }
        public function iniciarSesion($userName, $passWord)
        {
            if ($userName == $this->userName)
            {
                if ($passWord == $this->passWord)
                {
                    return true;
                }
            }
            else return false;
        }

    }

?>