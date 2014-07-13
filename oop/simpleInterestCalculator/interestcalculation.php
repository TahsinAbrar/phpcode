<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Interest Calculator</title>
    </head>
    <body>
        <form>
            <p>Simple Interest Calculator</p>
            <p>Principal Amount : <input type="text" name="principalAmount"/></p>
            <p>Annual Interest Rate : <input type="text" name="interestRate"/> % </p>
            <p>Time Period : <input type="text" name="timePeriod"/> Year</p>
            <input type="submit" name="submitButton" value="Caculate"/>
        </form>
        <?php
            require_once 'interestcalculator.php';
            if(isset($_GET['submitButton'])){
                $interest=new Interest();
                $interest->principalAmount=$_GET['principalAmount'];
                $interest->annualInterestRate=$_GET['interestRate'];
                $interest->timePeriod=$_GET['timePeriod'];
                echo 'Result : '.$interest->getTotalAmount();
            }
        ?>
    </body>
</html>
