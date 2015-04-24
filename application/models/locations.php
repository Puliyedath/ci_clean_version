<?php
    class Locations extends CI_Model{
        public $name;
        public $id;
        public $address;

        /**
         * @param mixed $name
         * @param mixed $id
         * @param mixed $address
         */
        public function __construct(){
            parent:: __construct();
        }

        public function toString(){
            return $this->name . "|" .  $this->id . "|" .  $this->address;
        }

        public function insertLocation($name, $id, $address){
            $array  = array(
                'name' => $name,
                'id' => $id,
                'address' => $address
                );
            $this->db->insert('locations', $array);

        }
        
        public function getLocations(){
            return $this->db->query("Select * from locations")->result_array();
        }

    }
?>
