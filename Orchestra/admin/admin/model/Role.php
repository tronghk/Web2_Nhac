<?php
    class Role{
        private $id;
        private $name;

        private $des;

        public function __construct($id, $name, $des){
            $this->id = $id;
            $this->name = $name;
            $this->des = $des;
        }
        public function get_id(){
            return $this->id;
        }
        public function set_id($id){
            $this->id = $id;
        }
        public function get_name(){
            return $this->name;
        }
        public function set_name($name){
            $this->name = $name;
        }
        public function get_des(){
            return $this->des;
        }

        public function set_des($des){
            $this->des = $des;
        }


    }
?>