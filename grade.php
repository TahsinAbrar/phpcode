<?php
	function getGrade($marks){
		if($marks>=80&&$marks<=100){
			$grade= "A+";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=70&&$marks<=79){
			$grade= "A";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=60&&$marks<=69){
			$grade= "A-";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=50&&$marks<=59){
			$grade= "B";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=40&&$marks<=49){
			$grade= "C";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=33&&$marks<=39){
			$grade= "D";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=0&&$marks<=32){
			$grade= "F";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		else{
			echo "Wrong input";
		}
	}
	getGrade(73);
?>