<?php
    class Role{
        public $idRole;
        public $username;
        public $password;
        function __construct($idRole,$username,$password) {
            $this->username = $username;
            $this->$idRole = $idRole;
            $this->$password = $password;
        }
        function get_username() {
            return $this->username;
        }
        function get_idRole() {
            return $this->idRole;
        }
        function get_password() {
            return $this->password;
        }
        function set_username($username) {
           $this->username = $username;
        }
          function set_idRole($idRole) {
            $this->$idRole = $idRole;
        }
        function set_password($password) {
            $this->password = $password;
         }
    }
?>