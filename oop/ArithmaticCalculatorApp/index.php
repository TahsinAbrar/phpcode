<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arithmatic Calculator App</title>
    </head>
    <body>
        <form>
            <p>First No. : <input type="text" name="firstNumber" value="<?php if(isset($_GET["firstNumber"])){ echo $_GET["firstNumber"];}?>"></p>
            <p>Second No. : <input type="text" name="secondNumber" value="<?php if(isset($_GET["secondNumber"])){ echo $_GET["secondNumber"];}?>"></p>
            <input type="submit" name="add" value="Add" />
            <input type="submit" name="subtract" value="Subtract" />
            <input type="submit" name="multiply" value="Multiply" />
            <input type="submit" name="divide" value="Divide" />
        </form>
        <?php
        require_once 'calculator.php';
        $calculator = new Calculator();

        if (isset($_GET["firstNumber"]) && isset($_GET["secondNumber"])) {
            $first_no = $_GET["firstNumber"];
            $second_no = $_GET["secondNumber"];
        }
        if (isset($_GET["add"])) {
            echo 'Addition = ' . $calculator->add($first_no, $second_no);
        } elseif (isset($_GET["subtract"])) {
            echo 'Subtraction = ' . $calculator->subtract($first_no, $second_no);
        } elseif (isset($_GET["multiply"])) {
            echo 'Multiplication = ' . $calculator->multiply($first_no, $second_no);
        } elseif (isset($_GET["divide"])) {
            echo 'Division = ' . $calculator->divide($first_no, $second_no);
        }
        ?>
    </body>
</html>
