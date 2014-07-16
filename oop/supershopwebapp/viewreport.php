<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Report</title>
    </head>
    <body>
        <?php
            require_once 'shop.php';
            require_once 'product.php';
            session_start();
            
            $shop = $_SESSION['shop'];
        ?>
        <h1>Shop Details</h1>
        <p>Shop Code : <?php echo $shop->get_code();?></p>
        <p>Shop Name : <?php echo $shop->get_name();?></p>
        <?php            
            echo "Product-Id &nbsp;&nbsp;&nbsp;&nbsp; Quantity". '<br/>';
            foreach ($shop->get_all_product() as $a_product) {
                echo $a_product->get_product_id()."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $a_product->get_quantity(). '<br/>';
            }
        ?>
    </body>
</html>
