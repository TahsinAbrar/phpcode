<!DOCTYPE html>
<html>
    <head>
        <title>Array_chunk function</title>
    </head>
    <body>
        <?php
            $input_array = array('a', 'b', 'c', 'd', 'e');
            echo '<pre>';
            print_r(array_chunk($input_array, 2));
            echo '<br/>';
            print_r(array_chunk($input_array, 2, true));
            echo '</pre>';
        ?>        
    </body>
</html>
