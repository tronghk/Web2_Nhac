<?php
     class Customer{
        public $email;
        public $name;
        public $image;
        public $phone;
        function __construct($email,$name,$image,$phone) {
            $this->name = $name;
            $this->$email = $email;
            $this->$phone = $phone;
            $this->$image = $image;
        }
        function get_name() {
            return $this->name;
        }
        function get_email() {
            return $this->email;
        }
        function get_phone() {
            return $this->phone;
        }
        function get_image() {
            return $this->image;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_email($email) {
            $this->$email = $email;
        }
        function set_phone($phone) {
            $this->phone = $phone;
         }
           function set_image($image) {
             $this->$image = $image;
         }
    }
?>