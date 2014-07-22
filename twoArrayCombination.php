<?php

$data_one=array('A'=>'Apple','B'=>'Ball');
$data_two=array('C'=>'Cat','D'=>'Dog','E'=>'Egg');
$count=0;
foreach ($data_one as $key1 => $value1) {
    foreach ($data_two as $key2 => $value2) {
        $result[] = $key1.'-'.$key2.' : '.$value1.'-'.$value2."<br/>";
        echo $result[$count];
        $count++;
    }   
}



?>