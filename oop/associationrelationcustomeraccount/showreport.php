<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Report</title>
    </head>
    <body>
        <?php 
        require_once 'customer.php';
        require_once 'account.php';
        session_start();
        $account= $_SESSION['an_account'];
        $customer=$_SESSION['a_customer'];
        ?>
            <fieldset>
                <legend>Show Details</legend>
                Customer Name: <?php $customer->get_customer_name();  ?><br/>
                Email Address: <?php $customer->get_email_address();?><br/>
                Account Number: <?php $account->get_account_number();?><br/>
                Opening Date: <?php $account->get_opening_date();?><br/>
            </fieldset>
        <?php
        // put your code here
        ?>
    </body>
</html>
