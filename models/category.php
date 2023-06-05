<?php

    class Category {

        private $genre;
        private $image;

        public function __construct($_genre, $_image) {

            $this->genre = $_genre;
            $this->image = $_image;

        }

        public function getGenres() {
            return $this->genre;
        }

        public function getImage() {
            return $this->image;
        }
    }

?>