<?php 
    include_once __DIR__ . '/sales.php';

    // questo andrà in extends
    class SingleProduct extends Category{

        use Sales;
        private $product;
        public $typeProduct;

        public function __construct( $_genre, $_image, $_product, $_discount, $_typeProduct ) {

            parent::__construct( $_genre, $_image);
            $this->product = $_product;
            $this->discount = $_discount;
            $this->typeProduct = $_typeProduct;
        }

        public function getProduct() {
            return $this->product;
        }
    }
    
?>