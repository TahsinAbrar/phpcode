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
        <form action="index.php" method="POST">
            <p>Id: <input type="text" name="idText"></p> 
            <p>Name: <input type="text" name="nameText"></p>
            <p>Salary: <input type="text" name="salaryText"></p> 
            <input type="submit" name="submitButton" />
        </form>
        <?php
            if(isset($_POST['submitButton']))
            {
                $id=$_POST['idText'];
                $name=$_POST['nameText'];
                $salary=$_POST['salaryText'];
                echo $id.', '.$name.', '.$salary;            
            }
        ?>
    </body>
</html>
