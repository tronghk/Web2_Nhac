<?php
    class Artist{
        private $idArtist;
        private $name;
        private $image;
        private $des;

        public function __construct($idArtist, $name,$image,$des){
            $this->idArtist = $idArtist;
            $this->name = $name;
            $this->image = $image;
            $this->des = $des;
        }
        public function get_idArtist(){
            return $this->idArtist;
        }
        public function set_idArtist($idArtist){
            $this->idArtist = $idArtist;
        }
        public function get_image(){
            return $this->image;
        }
        public function set_image($image){
            $this->image = $image;
        }
        public function get_des(){
            return $this->des;
        }
        public function set_des($des){
            $this->des = $des;
        }
        public function get_name(){
            return $this->name;
        }
        public function set_name($name){
            $this->name = $name;
        }
        
    }
?>