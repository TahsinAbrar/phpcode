<?php

/**
 * Description of shop
 *
 * @author BCC
 */
class Shop {
    private $code;
    private $name;
    private $product_list;
    
    public function get_code() {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }

        public function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->product_list = array();
    }

    public function add_product($a_product){ 
        if(count($this->product_list)<1){
        $this->product_list[]=$a_product;
        return 'Product Added1';        
        }
        else {
            foreach ($this->product_list as $product) {
                if($product->get_product_id() != $a_product->get_product_id()){
                    $this->product_list[]=$a_product;
                    echo 'Product Added2';  
                    break;
                }
                else { 
                     $amount = $product->get_quantity()+ $a_product->get_quantity();
                    $product->set_product($a_product->get_product_id(),$amount);
                    //$product->get_quantity()+=$a_product->get_quantity();
                    echo 'Product Updated';            
                    break;
                }    
            }
        }        
    }
    public function get_all_product(){
        return $this->product_list;
    }

}
