<?php
    class Song{
        private $idSong;
        private $name;
        private $image;
        private $idAlbum;
        private $idArtist;
        private $idGenreSong;
        private $link;

        public function __construct($idSong, $name,$image,$idAlbum,$idArtist,$idGenreSong,$link){
            $this->idSong = $idSong;
            $this->name = $name;
            $this->image = $image;
            $this->idAlbum = $idAlbum;
            $this->idArtist = $idArtist;
            $this->idGenreSong = $idGenreSong;
            $this->link = $link;
        }
        public function get_idSong(){
            return $this->idSong;
        }
        public function set_idSong($idSong){
            $this->idSong = $idSong;
        }
        public function get_image(){
            return $this->image;
        }
        public function set_image($image){
            $this->image = $image;
        }
        public function get_idAlbum(){
            return $this->idAlbum;
        }
        public function set_idAlbum($idAlbum){
            $this->idAlbum = $idAlbum;
        }
        public function get_idArtist(){
            return $this->idArtist;
        }
        public function set_idArtist($idArtist){
            $this->idArtist = $idArtist;
        }
        public function get_idGenreSong(){
            return $this->idGenreSong;
        }
        public function set_idGenreSong($idGenreSong){
            $this->idGenreSong = $idGenreSong;
        }
        public function get_link(){
            return $this->link;
        }
        public function set_link($link){
            $this->link = $link;
        }
        public function get_name(){
            return $this->name;
        }
        public function set_name($name){
            $this->name = $name;
        }
        
    }
?>