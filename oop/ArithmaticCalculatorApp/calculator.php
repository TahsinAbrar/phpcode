<?php

/**
 * Description of arithmaticcalculator
 *
 * @author LAB5
 */
class Calculator {
       
    public function add($first_no,$second_no){
        $addition = $first_no + $second_no;
        return $addition;
    }
    public function subtract($first_no,$second_no){
        $subtraction = $first_no - $second_no;
        return $subtraction;
    }
    public function multiply($first_no,$second_no){
        $multiplication = $first_no * $second_no;
        return $multiplication;
    }
    public function divide($first_no,$second_no){
        $division = $first_no / $second_no;
        return $division;
    }
}
