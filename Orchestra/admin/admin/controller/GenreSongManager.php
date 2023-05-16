<?php
include '../lib/session.php';
include '../lib/database.php';
include '../helper/format.php';
include '../model/GenreSong.php';

    class GenreSongManager
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function get(){
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
            $query = "select * from genresong limit $tung_trang,$sp_tung_trang";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
                array_push($value,$object);
            }
            }
            $_SESSION['trang'] = $trang;
            $_SESSION["list"] = $value;
            return;
        }

        public function getAll(): array{
            $query = "select * from genresong";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
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
            $_SESSION['object'] = null;
            if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $query = "select * from genresong where idGenreSong = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
                $_SESSION['object'] = $object;
            }
            return ;
            
        }
        public function searchId($id){
            $query = "select * from genresong where idGenreSong = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
            return $object;
        }
        

        public function add(){
            $_SESSION['add'] = null;
            if(isset($_GET['add'])){
                $_SESSION['add'] = $this->count()+1;
            }
            return ;
            
        }

        public function addGenre(){
            $result = null;
            if(isset($_POST['idadd'])){
                $id = $_POST['idadd'];
                $name = $_POST['nameadd'];
                $query = "Insert into genresong(idGenreSong,name) values('$id','$name')";
                $result = $this->db->insert($query);
                if($result == false)
                    return "error_create";
                else
                    return "success";
            }
            return $result;
            
        }

        public function editGenre(){
            $result = null;
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $query = "UPDATE genresong SET name = '$name' WHERE idGenreSong= '$id'";
                $result = $this->db->update($query);
                if($result == false)
                    return "error_edit";
                else
                    return "success";
            }
            return $result;
            
        }

        public function deleteGenre(){
            $result = null;
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $query = "DELETE FROM genresong WHERE idGenreSong = '$id'";
                $result = $this->db->delete($query);
                if($result == false)
                    return "error_delete";
                else
                    return "success";
            }
            return $result;
            
        }
        public function search(){
            $search = $_POST['search'];
            if($search == null)
                $_SESSION['search'] = "";
            else
                $_SESSION['search'] = $search;
            $list = array();
            if(isset($_POST['search'])){
                $search = $_POST['search'];
            
            $listAll = $this->getAll();     
            while( count($list) == 0){
                $list = $this->searchName($search,$listAll);
                if(count($list) >0)
                    break;
                if(strlen($search) >= 1 ){
                    $search = substr($search,0,-1);
                }else break;
            }
            if($list != null){
                $_SESSION["list"] = $list;
            }
        }
            return;
    }
        public function searchName($name, $list){
            $result = array();
            foreach($list as $value){
                if(strlen($value->get_name() >= $name)){
                    $new = substr($value->get_name(),0,strlen($name));
                    if($new == $name){
                        array_push($result,$value);
                    }
                }
            }
            return $result;
        }
        

    }
    
?>