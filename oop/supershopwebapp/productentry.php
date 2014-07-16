<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Entry</title>
    </head>
    <body>
        <h1>Add/Update Product</h1>
        <form method="POST">
            Product Id <input type="text" name="productIdText" /><br/>
            Quantity <input type="text" name="quantityText" />
            <input type="submit" name="save" value="Add/Update"/><br/>
        </form>
        <?php
         {
             require_once 'product.php';
             require_once 'shop.php';
             session_start();
             if(isset($_POST['save']))
             {
                 $product = new Product($_POST['productIdText'], $_POST['quantityText']);
                 /* @var $shop Shop */
                 
                 $shop = $_SESSION['shop'];
                 echo $shop->add_product($product);
                 
                 $_SESSION['product']=$product;
             }
         }
        ?>
    </body>
</html>
