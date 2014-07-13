<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salary Web App</title>
    </head>
    <body>
        <h1> Salary Web App </h1>
        <form action="index.php" method="GET">
            <p>Employee Name : <input type="text" name="employeeName"></p>
            <p>Basic Amount : <input type="text" name="basicAmount"></p>
            <p>House Rent : <input type="text" name="houseRent"> % of Basic</p>
            <p>Medical Allowance : <input type="text" name="medicalAllowance"> % of Basic</p>
            <input type="submit" name="submitButton" value="Show Me Salary" />
        </form>
        <?php
            require_once 'salarycalculator.php';
            
            if(isset($_GET['submitButton'])){
                $salary=new SalaryCalculator();
                $salary->employee_name=$_GET['employeeName'];
                $salary->basic_amount=$_GET['basicAmount'];
                $salary->house_rent=$_GET['houseRent'];
                $salary->medical_allowance=$_GET['medicalAllowance'];
                
                echo $salary->employee_name.', Your total salary : '.$salary->get_total_salary_amount()." taka";
            }
        ?>
    </body>
</html>
