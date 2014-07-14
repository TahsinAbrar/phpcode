<?php

/**
 * Description of arithmaticcalculator
 *
 * @author LAB5
 */
class Calculator {
       
    public function addition($first_no,$second_no){
        $addition = $first_no + $second_no;
        return $addition;
    }
    public function subtraction($first_no,$second_no){
        $subtraction = $first_no - $second_no;
        return $subtraction;
    }
    public function multiplication($first_no,$second_no){
        $multiplication = $first_no * $second_no;
        return $multiplication;
    }
    public function division($first_no,$second_no){
        $division = $first_no / $second_no;
        return $division;
    }
}
