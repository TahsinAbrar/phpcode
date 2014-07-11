<?php
    $input_array = array("FirSt" => 1, "SecOnd" => 4);
    echo '<pre>';
    print_r(array_change_key_case($input_array, CASE_UPPER));
    echo '</pre>';
?>
