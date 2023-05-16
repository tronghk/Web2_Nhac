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
        public function getUser(){
            $length =  count( $this->getAll());
            $sp_tung_trang = 6;
            if(!isset($_GET['trang'])){
                $trang = 1;
            }else{
                $trang = $_GET['trang'];
            }
            $tung_trang = ($trang-1)*6;
            if($sp_tung_trang > $length)
                $sp_tung_trang = $length;
            $query = "select * from user limit $tung_trang,$sp_tung_trang";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
               while($row = $result->fetch_assoc()){
                $object = new User($row["UserName"],$row["Password"],$row["Role"]);
                array_push($value,$object);
               }
            }
            $_SESSION['trang'] = $trang;
            $_SESSION["listUser"] = $value;
            return;
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
        public function count(){
           
            $value = count($this->getAll());
            return $value;
        }
        public function edit(){
            
            $_SESSION['username'] = null;
            if(isset($_GET['edit'])){
                $username = $_GET['edit'];
                $_SESSION['username'] = $username;
                return ;
            }
            
        }

        public function editUser(){
            $result = null;
            if(isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "UPDATE user SET Password = $password WHERE UserName= '$username'";
                $result = $this->db->update($query);
                if($result == false)
                    return "error_edit";
                else
                    return "success";
            }
            return $result;
            
        }
        public function search(){
            $listUser = array();
            if(isset($_POST['search'])){
                $search = $_POST['search'];
            
            $list = $this->getAll();
            foreach($list as $value){
                if($value->get_UserName() == $search){
                    array_push($listUser,$value);
                }
            }
            if($listUser != null)
                $_SESSION["listUser"] = $listUser;
            $_SESSION['search'] = $search;
            }else{
                $_SESSION['search'] = "";
            }
            
            return;
    }
        

    }
    
?>