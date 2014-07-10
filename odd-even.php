<?php
$start=1;
$end=10;
echo "Even Number = ";
for($start;$start<=$end;$start++){
	if($start%2==0)
	{
		echo $start."&nbsp;";
	}
}
$start=1;
echo "<br/>Odd Number = ";
for($start;$start<=$end;$start++){
	if($start%2!=0)
	{
		echo $start."&nbsp;";
	}
}
?>