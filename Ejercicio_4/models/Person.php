<?php
    namespace models;

    abstract class Person {
        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        public function __constructor($id, $firstName, $lastName, $dni, $email)
        {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dni = $dni;
            $this->email = $email;
        }
        public function getID()
        {
            return $this->id;
        }
        public function getFirstName()
        {
            return $this->firstName;
        }
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }
        public function getLastName()
        {
            return $this->lastName;
        }
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }
        public function getDNI()
        {
            return $this->dni;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($newEmail)
        {
            $this->email = $newEmail;
        }
    }
?>