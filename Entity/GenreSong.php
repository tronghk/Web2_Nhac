<?php
    class GenreSong{
        public $idGenre;
        public $name;
        function __construct($idGenre,$name) {
            $this->name = $name;
            $this->$idGenre = $idGenre;
        }
        function get_name() {
            return $this->name;
        }
          function get_idGenre() {
            return $this->idGenre;
        }
        function set_name($name) {
           $this->name = $name;
        }
          function set_idGenre($idGenre) {
            $this->$idGenre = $idGenre;
        }
    }
?>