<?php 

// questo andrà in composition
    class Products {

        private $type;
        protected $price;
        public $imageProduct;


        public function __construct($_type, $_price, $_imageProduct) {

            $this->type = $_type;
            $this->price = $_price;
            $this->imageProduct = $_imageProduct;
        }

        public function getType() {
            return $this->type;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($discount) {
            if($discount > 0 || $discount != null) {

                return $this->price = $this->price - ($this->price * ( $discount / 100 ));
            } else {

                throw new Exception('Il valore è null oppure è un numero uguale a zero');
            }
        }

    }
?>