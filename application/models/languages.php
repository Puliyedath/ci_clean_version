<?php
    class Languages extends CI_Model{
        public $name;
        public $id;

        /**
         * @param mixed $name
         * @param mixed $id
         * @param mixed $address
         */
        public function __construct(){
            parent:: __construct();
        }

        public function toString(){
            return $this->name . "|" .  $this->id ;
        }

        public function getLanguages(){
            return $this->db->query("Select * from languages")->result_array();
        }

    }
?>
