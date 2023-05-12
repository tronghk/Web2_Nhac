<?php
include '../lib/session.php';
include '../lib/database.php';
include '../helper/format.php';
include '../model/User.php';
    class UserManager
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function getAll(): array{
            $query = "select * from user";
            $result = $this->db->select($query);
            
            if($result != false){
                $value = array();
               while($row = $result->fetch_assoc()){
                $object = new User($row["UserName"],$row["Password"],$row["Role"]);
                array_push($value,$object);
               }
            }
            return $value;
        }
    }
    
?>