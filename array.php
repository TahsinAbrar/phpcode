<?php
//Array

$cars=array('toyota','sedan','mercidiz');
//echo gettype($cars);
$cars[8]='Corolla';
$cars[]='Ford';
$cars[c]="Ferrari";
$cars[]="Tata";

echo "<pre>";
print_r($cars);
echo "</pre>";

//Associative array

$fruits = array('a'=>'apple','b'=>'banana');
$fruits[]='This is last value';
echo "<pre>";
print_r($fruits);
echo "</pre>";

?>