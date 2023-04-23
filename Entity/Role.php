<?php
    class Role{
        public $idRole;
        public $name;
        public $des;
        function __construct($idRole,$name,$des) {
            $this->name = $name;
            $this->$idRole = $idRole;
            $this->$des = $des;
        }
        function get_name() {
            return $this->name;
        }
        function get_idRole() {
            return $this->idRole;
        }
        function get_des() {
            return $this->des;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_idRole($idRole) {
            $this->$idRole = $idRole;
        }
        function set_des($des) {
            $this->des = $des;
         }
    }
?>