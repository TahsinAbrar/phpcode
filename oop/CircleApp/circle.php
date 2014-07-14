<?php

/**
 * Description of circlearea
 *
 * @author LAB5
 */
class Circle {
    
    public $radius;
    public function get_area(){
        $area_of_circle = pi() * pow($this->radius, 2);
        return $area_of_circle;
    }
}
