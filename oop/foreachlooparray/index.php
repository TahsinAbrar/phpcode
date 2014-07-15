<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'account.php';
            $account1=new Account("sv-001", "2014-15-04");
            $account1->deposit(3000);
            $account1->withdraw(400);
            
            $account2=new Account("chk-001", "2014-15-04");
            $account2->deposit(5000);
                      
            $account3=new Account("dkh-001", "2014-15-04");
            $account3->deposit(10000);
            $account3->withdraw(15000);
            
            $accounts=array();
            $accounts[]=$account1;
            $accounts[]=$account2;
            $accounts[]=$account3;
            
            foreach ($accounts as $an_account) {
                echo $an_account->get_account_number().' '.$an_account->get_opening_date().' '.$an_account->get_balance().'<br/>';
            }
        ?>
    </body>
</html>
