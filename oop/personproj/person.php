<?php

/**
 * Description of person
 *
 * @author LAB5
 */
class Person {
    public $first_name;
    public $middle_name;
    public $last_name;
    
    public function get_full_name(){
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }
    public function get_reverse_name(){
        $full_name=  $this->get_full_name();
        $reverse_name = strrev($full_name);
        return $reverse_name;
    }
}
