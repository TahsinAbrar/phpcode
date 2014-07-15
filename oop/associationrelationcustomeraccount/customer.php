<?php

/**
 * Description of customer
 *
 * @author BCC
 */
class Customer {
    
    private $customer_name;
    private $email_address;
    private $an_account;
    
    public function get_customer_name() {
        return $this->customer_name;
    }

    public function get_email_address() {
        return $this->email_address;
    }

    public function get_an_account() {
        return $this->an_account;
    }
    
    /**
     * 
     * @return Account
     */
    public function set_customer_name($customer_name) {
        $this->customer_name = $customer_name;
    }

    public function set_email_address($email_address) {
        $this->email_address = $email_address;
    }

    public function set_an_account($an_account) {
        $this->an_account = $an_account;
    }


}
