<?php
$cars=array('toyota','sedan','suzuki','mercidize','premeo');
$fruits=array('t'=>'test','a'=>'apple','b'=>'banana');
$counter=0;
foreach($fruits as $key=>$whatever){
    //echo $counter.'--'.$key."--".$whatever."<br/>";
    echo $fruits[$key];
    $counter++;
}
?>