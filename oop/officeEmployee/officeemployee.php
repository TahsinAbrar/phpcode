<?php

/**
 * Description of OfficeEmployee
 *
 * @author bcc
 */
class OfficeEmployee {

    public $id;
    public $name;
    public $salary;
    private $min_salary_range=10000;
    private $min_range_salary_percentage=0.5;
    private $mid_range_salary_percentage=0.3;    
    private $max_salary_range=30000;
    private $max_range_salary_percentage=0.2;
    
    public function get_salary_with_bonus(){
        $salary=  $this->salary;
        if($salary<=$this->$this->min_salary_range){
            return $salary+$salary*$this->min_range_salary_percentage ;
        }
        elseif($salary>$min_salary_range&&$salary<=$this->max_salary_range){
            return $salary+$salary*$this->mid_range_salary_percentage ;
        }
        elseif($salary<=$max_salary_range){
            return $salary+$salary*$this->max_range_salary_percentage ;
        }
    }
}
