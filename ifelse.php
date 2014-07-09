<?php
$marks=51;
if($marks>79){
	$grade= "A+";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks>69){
	$grade= "A";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks>59){
	$grade= "A-";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks>49){
	$grade= "B";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks>39){
	$grade= "C";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks>32){
	$grade= "D";
	echo "<h1>Grade= ".$grade."</h1>";
}
elseif($marks<32){
	$grade= "F";
	echo "<h1>Grade= ".$grade."</h1>";
}
else{
	echo "Wrong input";
}
?>