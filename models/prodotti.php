<?php 
    class Prodotti {

        public $genre;
        public $image;

        public function __construct($_genre, $_image) {

            $this->genre = $_genre;
            $this->image = $_image;

        }

    }
?>