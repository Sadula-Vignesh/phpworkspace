<?php
echo "Hello My name is sadula vignesh.";

echo "<br>";

echo 'Hello I am "John Doe"'; 
echo "<br>";
echo "Hello I'am 'John Doe'";

echo "<br>";

define("My_num", 7);
echo  My_num;

echo "<br>";

$p = 1000;
$t = 2;
$r = 5;

$si = ($p * $t * $r) / 100;
echo "SI=" . $si;

echo "<br>";

$num = (int)readline("enter a number: ");
$square = $num * $num;
echo "Square of $num is $square";

echo "<br>";

$firstName = readline("Enter first name: ");
$lastName = readline("Enter last name: ");
$fullName = $firstName . " " . $lastName;

echo "Full name: " . $fullName;

echo "<br>";

$firstInteger = (int)readline("Enter first integer value: ");
$secondInteger = (int)readline("Enter second integer value: ");

if ($secondInteger == 0) {
    echo "0.\n";
} else {
    $quotient = intdiv($firstInteger, $secondInteger);
    $remainder = $firstInteger % $secondInteger;

    echo "Quotient: " . $quotient . "\n";
    echo "Remainder: " . $remainder . "\n";
}

echo "<br>";

$A = 10;
$B = 20;
$temp = $A;
$A = $B;
$B = $temp;
echo "After swapping A= " . $A . " B= " . $B;

echo "<br>";

$str = " Hello   World PHP  ";
$newStr = str_replace(' ', '', $str);

echo "Original: '$str'<br>";
echo "Without spaces: '$newStr'";


?>