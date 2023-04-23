<?php
    class Album{
        public $idAlbum;
        public $name;
        function __construct($idAlbum,$name) {
            $this->name = $name;
            $this->$idAlbum = $idAlbum;
        }
        function get_name() {
            return $this->name;
        }
          function get_idAlbum() {
            return $this->idAlbum;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_idAlbum($idAlbum) {
            $this->$idAlbum = $idAlbum;
        }
    }
?>