<?php
       class Artist{
        public $idArtist;
        public $name;
        public $image;
        public $des;
        function __construct($idArtist,$name,$image,$des) {
            $this->name = $name;
            $this->$idArtist = $idArtist;
            $this->$des = $des;
            $this->$image = $image;
        }
        function get_name() {
            return $this->name;
        }
        function get_idArtist() {
            return $this->idArtist;
        }
        function get_des() {
            return $this->des;
        }
        function get_image() {
            return $this->image;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_idArtist($idArtist) {
            $this->$idArtist = $idArtist;
        }
        function set_des($des) {
            $this->des = $des;
         }
           function set_image($image) {
             $this->$image = $image;
         }
    }
?>