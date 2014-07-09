<?php
	function getGrade($marks){
		if($marks>=70&&$marks<=100){
			$grade= "A+";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=30&&$marks<=69){
			$grade= "A";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		elseif($marks>=0&&$marks<=29){
			$grade= "F";
			echo "<h1>Grade= ".$grade."</h1>";
		}
		else{
			echo "Wrong input";
		}
	}
	getGrade(73);
?>