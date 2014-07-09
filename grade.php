<?php
	function getGrade($marks){
		$grade='';
		if($marks>=70&&$marks<=100){
			$grade= "A+";
		}
		elseif($marks>=30&&$marks<=69){
			$grade= "A";
		}
		elseif($marks>=0&&$marks<=29){
			$grade= "F";
		}
		else{
			echo "Wrong input";
		}
		return $grade;
	}
	$grade=	getGrade(43);
	echo "<h1>Grade= ".$grade."</h1>";
?>