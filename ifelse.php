<?php
$marks=73;
if($marks>=80&&$marks<=100){
	$grade= "A+";
	echo $grade;
}
elseif($marks>=70&&$marks<=79){
	$grade= "A";
	echo $grade;
}
elseif($marks>=60&&$marks<=69){
	$grade= "A-";
	echo $grade;
}
elseif($marks>=50&&$marks<=59){
	$grade= "B";
	echo $grade;
}
elseif($marks>=40&&$marks<=49){
	$grade= "C";
	echo $grade;
}
elseif($marks>=33&&$marks<=39){
	$grade= "D";
	echo $grade;
}
elseif($marks>=0&&$marks<=32){
	$grade= "F";
	echo $grade;
}
else{
	echo "Wrong input";
}
?>