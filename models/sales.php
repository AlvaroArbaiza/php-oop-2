<?php 
    trait Sales{

        private $discount;

        public function __construct ( $_discount ){
            $this->_discount = $_discount;
        }

        public function getDiscount() {
            return $this->discount;
        }
    }
?>