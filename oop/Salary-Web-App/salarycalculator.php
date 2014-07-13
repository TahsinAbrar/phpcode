<?php

/**
 * Description of salary
 *
 * @author bcc
 */
class SalaryCalculator {
    public $employee_name;
    public $basic_amount;
    public $house_rent;
    public $medical_allowance;
    public $percentage_of_house_rent;
    public $percentage_of_medical_allowance;
    

    public function get_total_salary_amount(){
        $basic_amount =  $this->basic_amount;
        $percentage_of_house_rent =  $this->house_rent;
        $percentage_of_medical_allowance =  $this->medical_allowance;
        $total_amount_of_house_rent = ($basic_amount*$percentage_of_house_rent)/100;
        $total_amount_of_medical_allowance = ($basic_amount*$percentage_of_medical_allowance)/100;
        
        $total_salary = $basic_amount + $total_amount_of_house_rent + $total_amount_of_medical_allowance;
        return $total_salary;
    }
}
