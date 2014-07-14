<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bank Account Project</title>
    </head>
    <body>
        <form>
            <p>Customer Name : <input type="text" name="customerNameText" /></p>
            <p>Account No : <input type="text" name="accountNoText" />
            <input type="submit" name="createButton" value="Create" /></p>
            <p>Amount : <input type="text" name="amountText" /></p>
            <input type="submit" name="depositButton" value="Deposit" />
            <input type="submit" name="withdrawButton" value="Withdraw" /><br/>
            <input type="submit" name="showReportButton" value="Show Report" />
        </form>
        <?php
            require_once 'account.php';
            
            session_start();
            if(isset($_GET['createButton'])){
                $account = new Account($_GET['customerNameText'], $_GET['accountNoText']);
                $_SESSION['an_account']=$account;
                echo 'Account created';
            }
            if(isset($_GET['depositButton'])){
                $account = $_SESSION['an_account'];
                $account->deposit($_GET['amountText']);
                $_SESSION['an_account']=$account;
                echo 'Deposited';
            }
            if(isset($_GET['withdrawButton'])){
                $account = $_SESSION['an_account'];
                echo $account->withdraw($_GET['amountText']);
                $_SESSION['an_account']=$account;
                //echo 'Withdrawn';
            }
            if(isset($_GET['showReportButton'])){
                $account = $_SESSION['an_account'];
                echo $account->get_name()."<br/>".$account->get_number()."<br/>".$account->get_balance();
            }
        ?>
    </body>
</html>
