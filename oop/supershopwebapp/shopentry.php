<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shop Entry</title>
    </head>
    <body>
        <h1>Create a shop</h1>
        <form method="POST">
            Code <input type="text" name="codeText" /><br/>
            Name <input type="text" name="nameText" />
            <input type="submit" name="submit" value="Create" /><br/>
        </form>
        <?php        
        {
            require 'shop.php';
            session_start();
            if (isset($_POST['submit']))
            {
                $shop = new Shop($_POST['codeText'], $_POST['nameText']);
                $_SESSION['shop'] = $shop;
//                print_r($_SESSION['shop']);
//                exit();
                echo 'Shop created';
            }
        }
        ?>
    </body>
</html>
