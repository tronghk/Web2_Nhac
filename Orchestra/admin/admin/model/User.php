<?php
    class User{
        private $username;
        private $password;

        private $role;

        public function __construct($username, $password, $role){
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
        }
        public function get_UserName(){
            return $this->username;
        }
        public function get_Password(){
            return $this->password;
        }
        public function get_Role(){
            return self::$role;
        }

        public function set_Role($role){
            return self::$role;
        }
        public function set_UserName($username){
            $this->username = $username;
        }
        public function set_Password($password){
            $this->password = $password;
        }
    }
?>