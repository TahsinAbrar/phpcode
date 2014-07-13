<?php

/**
 * Description of calculate
 *
 * @author bcc
 */
class InterestCalculator {
    public $principalAmount;
    public $annualInterestRate;
    public $timePeriod;
    
    public function getTotalAmount(){
        $principalAmount =  $this->principalAmount;
        $totalInterest =  ($this->principalAmount*$this->annualInterestRate)/100;
        $timePeriod =  $this->timePeriod;
        $totalAmount = $principalAmount+$totalInterest*$timePeriod;
        return $totalAmount;
    }
}
