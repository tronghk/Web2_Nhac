<?php
    class Customer{
        private $email;
        private $name;
        private $image;
        private $phone;

        public function __construct($email, $name,$image,$phone){
            $this->email = $email;
            $this->name = $name;
            $this->image = $image;
            $this->phone = $phone;
        }
        public function get_email(){
            return $this->email;
        }
        public function set_email($email){
            $this->email = $email;
        }
        public function get_image(){
            return $this->image;
        }
        public function set_image($image){
            $this->image = $image;
        }
        public function get_phone(){
            return $this->phone;
        }
        public function set_phone($phone){
            $this->phone = $phone;
        }
        public function get_name(){
            return $this->name;
        }
        public function set_name($name){
            $this->name = $name;
        }
        
    }
?>