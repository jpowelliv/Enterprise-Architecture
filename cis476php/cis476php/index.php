
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!". "<br>";
$txt = "Joseph Here from CIs 476 with the PHP HW Assighnment :-)";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

// string variables and string manipulation
echo "I made hundreds investing on Webull!";
echo "<br>";
echo str_replace("hundreds", "thousands", "I made hundreds investing on Webull!");
echo "<br>";
echo strrev("I made hundreds investing on Webull!");
echo "<br>";
$money = array("hundreds", "thousands", "bands" => "2 racks");
echo "<br>";
echo "On Monday I Made $money[0] off Webull.".PHP_EOL;
echo "<br>";
echo "On Tuesday I Made $money[1] Off Webull.".PHP_EOL;
echo "<br>";
echo "On Thursday I Made $money[bands] off webull.".PHP_EOL;

class investors {
    public $juan = "Juan Powell";
    public $josh = "Josh Powell";
    public $ced = "Cedric Powell";
}

$investors = new investors();

echo "$investors->juan made $money[1] off webull.".PHP_EOL;
echo "$investors->josh made less money this week compared to $investors->ced.".PHP_EOL;
echo "$investors->josh's brother made more than $investors->ced.".PHP_EOL;
echo "$investors->juan has made more than $investors->ced."; 
echo "<br>";

// numbers (both kinds) using vars and mathematical operations
//from book

echo "<br>";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
//my work
echo(sqrt(50));
echo "<br>";
echo 10 - 5, "<br>";
echo 12 + 9, "<br>";
echo 225 /5, "<br>";
echo 18 % 7.1, "<br>";
echo 3 * 11, "<br>";
echo ceil(21/3)*((25/5)+10)-100, "<br>";


// boolean variables and if statements
echo "<br>";
$x = 1121;
var_dump(is_int($x));
$x = 11.21;
var_dump(is_int($x));
echo "<br>";
$x = 19.995;
var_dump(is_float($x));
echo "<br>";
$a = true; 
$b = false; 
var_dump($a);
var_dump($b);
echo "<br>";
$a = 20;
$b = 10;
if ($a > $b):
	echo $a." is greater than ".$b;
elseif ($a == $b):
	echo $a." equals ".$b;
else: 
	echo $a." is less than ".$b;
    endif;
echo "<br>";


// one or more arrays (show how to add something to an array)
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

$kills = array("joe" => 8, "josh" => 5, "suu" => 3);

echo "On Apex, Joe kill count is ". $kills['joe'] . "<br/>";
echo "On Apex, Josh kill count is ". $kills['josh'] . "<br/>";
echo "On Apex, Vlone Suu kill count is ". $kills['suu'] . "<br/>";

$kills['joe'] = "the best out the group";
$kills['josh'] = "second best";
$kills['suu'] = "needs to do better";

echo "On Apex, Joe kill count is ". $kills['joe'] . "<br/>";
echo "On Apex, Josh kill count is ". $kills['josh'] . "<br/>";
echo "On Apex, Vlone Suu kill count is ". $kills['suu'] . "<br/>";
echo "<br>";
//$array = array(
	

// at least two different kinds of loops
//for-loop
echo "<br>";
$a = 0;
$b = 0;

for( $i = 0; $i < 3; $i++ ) {
	$a += 9;
    $b += 3;
}
	echo ("Loop a = $a and b = $b" );
 echo "<br>";
 //do-while loop
 //foreach loop
$array = array( 2, 4, 6, 8, 10);
foreach( $array as $value ) {
	echo"Value $value <br />";
 }
 
?> 

</body>
</html>
