<?php
include '../lib/database.php';
include '../helper/format.php';
include '../model/Song.php';
include '../model/Album.php';
include '../model/GenreSong.php';
include '../model/Artist.php';

    class SongManager
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
            $query = "select * from song limit $tung_trang,$sp_tung_trang";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new Song($row["idSong"],$row["name"],$row["image"],$row["idAlbum"],$row["idArtist"],$row["idGenreSong"],$row["link"]);
                $nameGende = $this->searchIdType($object->get_idGenreSong())->get_name();
                $nameSinger = $this->searchIdArtist($object->get_idArtist())->get_name();
                $nameAlbum = $this->searchIdAlbum($object->get_idAlbum())->get_name();

                $object->set_idAlbum($nameAlbum);
                $object->set_idArtist($nameSinger);
                $object->set_idGenreSong($nameGende);
                array_push($value,$object);
            }
            }
            $_SESSION['trang'] = $trang;
            $_SESSION["list"] = $value;
            return;
        }

        public function getAll(): array{
            
            $query = "select * from song";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new Song($row["idSong"],$row["name"],$row["image"],$row["idAlbum"],$row["idArtist"],$row["idGenreSong"],$row["link"]);
                $nameGende = $this->searchIdType($object->get_idGenreSong())->get_name();
                $nameSinger = $this->searchIdArtist($object->get_idArtist())->get_name();
                $nameAlbum = $this->searchIdAlbum($object->get_idAlbum())->get_name();

                $object->set_idAlbum($nameAlbum);
                $object->set_idArtist($nameSinger);
                $object->set_idGenreSong($nameGende);

                array_push($value,$object);
            }
            }
            return $value;
        }
        public function searchIdAlbum($id){
            $query = "select * from album where idAlbum = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Album($row["idAlbum"],$row["name"]);
            return $object;
        }

        public function searchIdArtist($id){
            $query = "select * from artist where idArtist = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
            return $object;
        }

        public function searchIdType($id){
            $query = "select * from genresong where idGenreSong = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
            return $object;
        }

        public function searchIdNameAlbum($name){
            $query = "select * from album where name = '$name'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Album($row["idAlbum"],$row["name"]);
            return $object;
        }

        public function searchIdNameArtist($name){
            $query = "select * from artist where name = '$name'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Artist($row["idArtist"],$row["name"],$row["image"],$row["des"]);
            return $object;
        }

        public function searchIdNameType($name){
            $query = "select * from genresong where name = '$name'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new GenreSong($row["idGenreSong"],$row["name"]);
            return $object;
        }

        public function getAllType(){
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
        
        public function getAllAlbum(){
            $query = "select * from album";
            $result = $this->db->select($query);
            if($result != false){
                $value = array();
            while($row = $result->fetch_assoc()){
                $object = new Album($row["idAlbum"],$row["name"]);
                array_push($value,$object);
            }
            }
            return $value;
        }
        
        public function getAllSinger(){
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
        
        

        public function count(){
            $value = count($this->getAll());
            return $value;
        }
        public function edit(){
            $_SESSION['object'] = null;
            if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $query = "select * from song where idSong = '$id'";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                $object = new Song($row["idSong"],$row["name"],$row["image"],$row["idAlbum"],$row["idArtist"],$row["idGenreSong"],$row["link"]);
                $_SESSION['object'] = $object;
            }
            return ;
            
        }
        public function searchById($id){
            $query = "select * from song where idSong = '$id'";
            $result = $this->db->select($query);
            $row = $result->fetch_assoc();
            $object = new Song($row["idSong"],$row["name"],$row["image"],$row["idAlbum"],$row["idArtist"],$row["idGenreSong"],$row["link"]);
            return $object;
        }
        

        public function add(){
            $_SESSION['add'] = null;
            if(isset($_GET['add'])){
                $_SESSION['add'] = $this->count()+1;
            }
            return ;
            
        }

        public function addSong(){
            $result = null;
            if(isset($_POST['idAdd'])){
                $id = $_POST['idAdd'];
                $name = $_POST['nameAdd'];
                $genre = $_POST['genreAdd'];
                $singer = $_POST['singerAdd'];
                $album = $_POST['albumAdd'];
                $image = $_POST['imageAdd'];
                $audio = $_POST['audioAdd'];

                $genre = $this->searchIdNameType($genre)->get_id();
                $singer = $this->searchIdNameArtist($singer)->get_idArtist();
                $album = $this->searchIdNameAlbum($album)->get_id();
                $query = "Insert into song(idSong,name,image,idAlbum,idArtist,idGenreSong,link) values('$id','$name','$image','$album','$singer','$genre','$audio')";
                $result = $this->db->insert($query);
                if($result == false)
                    return "error_create";
                else
                    return "success";
            }
            return $result;
            
        }

        public function editSong(){
            $result = null;
            if(isset($_POST['idEdit'])){
                $id = $_POST['idEdit'];
                $name = $_POST['nameEdit'];
                $genre = $_POST['genreEdit'];
                $singer = $_POST['singerEdit'];
                $album = $_POST['albumEdit'];
                $image = $_POST['imageEdit'];
                $audio = $_POST['audioEdit'];
                $ob = $this->searchById($id);
                if($image == ""){
                    $image = $ob->get_image();
                }
                if($audio == ""){
                    $audio = $ob->get_link();
                }

                $genre = $this->searchIdNameType($genre)->get_id();
                $singer = $this->searchIdNameArtist($singer)->get_idArtist();
                $album = $this->searchIdNameAlbum($album)->get_id();

                $query = "UPDATE song SET name = '$name',image = '$image',idArtist = '$singer',
                idAlbum = '$album',idGenreSong = '$genre',link = '$audio' WHERE idSong= '$id'";
                $result = $this->db->update($query);
                if($result == false)
                    return "error_edit";
                else
                    return "success";
            }
            return $result;
            
        }

        public function deleteSong(){
            $result = null;
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $query = "DELETE FROM song WHERE idSong = '$id'";
                $result = $this->db->delete($query);
                if($result == false)
                    return "error_delete";
                else
                    return "success";
            }
            return $result;
            
        }
        public function search(){
            $list = array();
            if(isset($_POST['search'])){
                $search = $_POST['search'];
                $_SESSION['search'] = $search;
            
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