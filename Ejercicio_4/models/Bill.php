<?php
    namespace models;

    class Bill {
        private $date;
        private $type;
        private $number;

        public function __constructor($date, $type, $number)
        {
            $this->data = $data;
            $this->type = $type;
            $this->number = $number;
        }
        public function getDate()
        {
            return $this->date;
        }
        public function setDate($date)
        {
            $this->date = $date;
        }
        public function getType()
        {
            return $this->type;
        }
        public function setType($type)
        {
            $this->type = $type;
        }
        public function getNumber()
        {
            return $this->number;
        }
        public function setNumber($number)
        {
            $this->number = $number;
        }
    }
?>