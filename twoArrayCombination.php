<?php

$data_one=array('A'=>'apple','B'=>'ball');
$data_two=array('C'=>'Cat','D'=>'Dog','E'=>'Egg');
foreach ($data_one as $key1 => $value1) {
    foreach ($data_two as $key2 => $value2) {
        echo $key1.'-'.$key2.' : '.$value1.'-'.$value2."<br/>";
    }
    
}


?>