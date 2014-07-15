<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Association Relation Customer Account</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <fieldset>
                <legend>Customer e'account Info Entry</legend>
                Customer Name: <input type="text" name="customerNameText"><br/>
                Email Address: <input type="text" name="emailAddressText"><br/>
                Account Number: <input type="text" name="accountNumberText"><br/>
                Opening Date: <input type="text" name="openingDateText"><br/>
                <input type="submit" name="createButton" value="Create">
            </fieldset>
        </form>
        <form>
            <fieldset>
                <legend>Transaction</legend>
                Amount: <input type="text" name="amountText">
                <input type="submit" name="depositButton" value="Deposit">                
                <input type="submit" name="withdrawButton" value="Withdraw">
            </fieldset>
        </form>
        <form action="showreport.php" method="GET">
            <input type="submit" value="Show Report"/>
        </form>
        <?php
                require_once 'account.php';
                require_once 'customer.php';
                session_start();
            if(isset($_GET['createButton'])){
                $account= new Account($_GET['accountNumberText'], $_GET['openingDateText']);
                
                $customer=new Customer();
                $customer->set_customer_name($_GET['customerNameText']);
                $customer->set_email_address($_GET['emailAddressText']);
                $customer->set_an_account($account);
                $_SESSION['an_account']=$account;
                $_SESSION['a_customer']=$customer;
                echo "Customer balance= ".$customer->get_an_account()->get_balance();            
            }
            
            if(isset($_GET['depositButton'])){
                $account = $_SESSION['an_account'];
                $account->deposit($_GET['amountText']); 
                $_SESSION['an_account']=$account;
                echo 'Deposited';   
                echo $account->get_balance()."<br/>";        
            }
            if(isset($_GET['withdrawButton'])){
                $account = $_SESSION['an_account'];
                echo $account->withdraw($_GET['amountText']);
                echo $account->get_balance()."<br/>";
                $_SESSION['an_account']=$account;
            }
        ?>
    </body>
</html>
