<?php

/**
 * Description of account
 *
 * @author BCC
 */
class Account {
    private $account_number;
    private $opening_date;
    private $balance;
    public function get_account_number() {
        return $this->account_number;
    }

    public function get_opening_date() {
        return $this->opening_date;
    }

    public function get_balance() {
        return $this->balance;
    }

    public function __construct($account_number, $opening_date) {
        $this->account_number = $account_number;
        $this->opening_date = $opening_date;
        $this->balance=0;
    }

    public function deposit($amount){
        $this->balance = $this->balance + $amount;
        return "Deposited";
    }
    public function withdraw($amount){
        $this->balance = $this->balance - $amount;
        return "Withdrawn";
    }
}
