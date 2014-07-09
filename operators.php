<?php
//math operators
$x=100/(2*5);
$y=100%(2*5);
$z=100/ 2 * 5;
$a=0 / 5; 
$b=0 % 5;

echo $x."<br/>"; //10
echo $y."<br/>"; //0
echo $z."<br/>"; //250
echo $a."<br/>"; //0
echo $b."<br/>"; //0

//Unary Operators
$a=2;
echo $a++."<br/>"; //2
echo $a--."<br/>"; //3
echo ++$a."<br/>"; //3
echo --$a."<br/>"; //2
echo $a.PHP_EOL; //2
echo ++$a;

//Unary operator precedence testing

$a=4;
$b=2;
echo ++$a*($a++ + --$b);
/*
* First execution starts with first bracket. 
* Initial value of a is 4 and b is 2.
* So, at first echo ++$a*(4+1);
* Then $a will be incremented because $a++;
* Then  $a will again be pre-incremented in the statement.
* Now echo 6*(4+1);
* So, the result is 30.
*/

?>