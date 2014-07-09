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

//multi dimension array

$arr2D=array($cars,$fruits);
echo "<pre>";
print_r($arr2D);
echo "</pre>";

echo $arr2D[1]['b'];
?>