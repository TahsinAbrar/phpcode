<?php


/**
 * Description of product
 *
 * @author BCC
 */
class Product {
    private $product_id;
    private $quantity;

    public function __construct($product_id, $quantity) {
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }
    public function get_product_id() {
        return $this->product_id;
    }

    public function get_quantity() {
        return $this->quantity;
    }
    public function set_product($product_id,$quantity){        
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }

}
