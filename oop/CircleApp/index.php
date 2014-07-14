<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Circle App</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <p>Radius of Circle: <input type="text" name="radius"><input type="submit" name="submitButton" value="Area"/></p>
            
        </form>
        <?php
            require_once 'circle.php';
            
            if(isset($_GET["submitButton"])){
                $circle= new Circle();
                $circle->radius=$_GET["radius"];
                echo "Area of Circle = ".$circle->get_area();
            }
        ?>
    </body>
</html>
