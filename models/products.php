<?php 

// questo andrà in composition
    class Products {

        public $type;
        public $price;
        public $imageProduct;


        public function __construct($_type, $_price, $_imageProduct) {

            $this->type = $_type;
            $this->price = $_price;
            $this->imageProduct = $_imageProduct;
        }

    }
?>