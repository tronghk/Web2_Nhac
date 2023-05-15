<?php
include '../lib/session.php';
include '../lib/database.php';
include '../helper/format.php';
include '../model/Artist.php';

    class ArtistManager
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
            $query = "select * from artist limit $tung_trang,$sp_tung_trang";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
                array_push($value,$object);
            }
            }
            $_SESSION['trang'] = $trang;
            $_SESSION["list"] = $value;
            return;
        }

        public function getAll(): array{
            $query = "select * from artist";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
                array_push($value,$object);
            }
            }
            return $value;
        }
        public function searchId($id){
            $query = "select * from artist where idArtist = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
            return $object;
        }
        public function count(){
            $value = count($this->getAll());
            return $value;
        }
        public function edit(){
            $_SESSION['object'] = null;
            if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $query = "select * from artist where idArtist = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
                $_SESSION['object'] = $object;
            }
            return ;
            
        }

        public function add(){
            $_SESSION['add'] = null;
            if(isset($_GET['add'])){
                $_SESSION['add'] = $this->count()+1;
            }
            return ;
            
        }

        public function addSinger(){
            $result = null;
            if(isset($_POST['idadd'])){
                $id = $_POST['idadd'];
                $name = $_POST['nameadd'];
                $image = $_POST['imageadd'];
                $des = $_POST['desadd'];
                $query = "Insert into artist(idArtist,name,image,des) values('$id','$name','$image','$des')";
                $result = $this->db->insert($query);
                if($result == false)
                    return "error_create";
                else
                    return "success";
            }
            return $result;
            
        }

        public function editSinger(){
            $result = null;
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $des = $_POST['des'];
                $ob = $this->searchId($id);
                if($image == ""){
                    $image = $ob->get_image();
                }
                $query = "UPDATE artist SET name = '$name',image = '$image',des = '$des' WHERE idArtist= '$id'";
                $result = $this->db->update($query);
                if($result == false)
                    return "error_edit";
                else
                    return "success";
            }
            return $result;
            
        }

        public function deleteSinger(){
            $result = null;
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $query = "DELETE FROM artist WHERE idArtist = '$id'";
                $result = $this->db->delete($query);
                if($result == false)
                    return "error_delete";
                else
                    return "success";
            }
            return $result;
            
        }
        public function search(){
            if(isset($_POST['search'])){
                $search = $_POST['search'];

                $list = array();
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
                $_SESSION['search'] = $search;
        }else{
            $_SESSION['search'] = "";
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