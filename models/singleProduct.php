<?php 

// questo andrà in extends
    class SingleProduct extends Category{

        private $product;
        public $typeProduct;

        public function __construct( $_genre, $_image, $_product, $_typeProduct ) {

            parent::__construct( $_genre, $_image);
            $this->product = $_product;
            $this->typeProduct = $_typeProduct;
        }

        public function getProduct() {
            return $this->product;
        }
    }
    
?>