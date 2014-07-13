<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <p>Id: <input type="text" name="idText"></p> 
            <p>Name: <input type="text" name="nameText"></p>
            <p>Salary: <input type="text" name="salaryText"></p> 
            <input type="submit" name="submitButton" />
        </form>
        <?php
            require_once 'officeemployee.php';
            if(isset($_GET['submitButton']))
            {
                $an_employee=new OfficeEmployee();
                $an_employee->id = $_GET['idText'];
                $an_employee->name = $_GET['nameText'];
                $an_employee->salary = $_GET['salaryText'];
                $salary_with_bonus = $an_employee->get_salary_with_bonus();
                echo $an_employee->id.', '.$an_employee->name.', '.$an_employee->salary." Salary with Bonus : ".$salary_with_bonus;            
            }
        ?>
    </body>
</html>
