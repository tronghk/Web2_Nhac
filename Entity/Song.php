<?php
     class Song{
        public $idSong;
        public $name;
        public $image;
        public $idAlbum;
        public $idArtist;
        public $idGenre;
        public $link;
        function __construct($idSong,$name,$image,$idAlbum,$idArtist,$idGenre,$link) {
            $this->name = $name;
            $this->$idSong = $idSong;
            $this->$idAlbum = $idAlbum;
            $this->$image = $image;
            $this->$idArtist = $idArtist;
            $this->$idGenre = $idGenre;
            $this->$link = $link;
        }
        function get_name() {
            return $this->name;
        }
        function get_idSong() {
            return $this->idSong;
        }
        function get_idAlbum() {
            return $this->idAlbum;
        }
        function get_idArtist() {
            return $this->idArtist;
        }
        function get_link() {
            return $this->link;
        }
        function get_idGenre() {
            return $this->idGenre;
        }
        function get_image() {
            return $this->image;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_idSong($idSong) {
            $this->$idSong = $idSong;
        }
        function set_idArtist($idArtist) {
            $this->idArtist = $idArtist;
         }
           function set_image($image) {
             $this->$image = $image;
         }
         function set_idGenre($idGenre) {
            $this->$idGenre = $idGenre;
        }
        function set_link($link) {
            $this->$link = $link;
        }
        function set_idAlbum($idAlbum) {
            $this->$idAlbum = $idAlbum;
        }
    }
?>