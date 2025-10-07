<?php

$number = 4;

if ($number % 2 === 0) {
    echo("This is an even number<br>");
} else {
    echo("This number is odd<br>");
}




$character = "v";
if (
    ($character === "a") || 
    ($character === "e") || 
    ($character === "i") || 
    ($character === "o") || 
    ($character === "u")
) {
    echo("The given character is VOWEL<br>");
} else {
    echo("The given character is CONSONANT<br>");
}





if ($number > 0) {
    echo("The given number is positive<br>");
} elseif ($number < 0) {
    echo("The given number is negative<br>");
} else {
    echo("The number is equal to 0<br>");
}



$name = "Vignesh";
for ($i = 0; $i < 100; $i++) {
    echo($name . "<br>");
}




$num = 7;
$sum = 0;
for ($i = 0; $i < $num; $i++) {
    $sum = $sum + $i;
}
echo("Sum is: $sum<br>");



$tableNumber = 5;
for ($i = 1; $i <= 10; $i++) {
    echo("$tableNumber * $i = " . ($tableNumber * $i) . "<br>");
}



for ($i = 1; $i <= 9; $i++) {
    echo "<h3>Multiplication Table of $i</h3>";
    
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    
    echo "<hr>";
}



if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        $result = $num1 + $num2;
    } elseif ($operator == '-') {
        $result = $num1 - $num2;
    } elseif ($operator == '*') {
        $result = $num1 * $num2;
    } elseif ($operator == '/') {
        if ($num2 == 0) {
            $result = "Cannot divide by zero!";
        } else {
            $result = $num1 / $num2;
        }
    } else {
        $result = "Invalid operator!";
    }



    $sequence = 100;
    for($i = 1; $i < $sequence + 1; $i++){
        if($i!==41){
            echo($i);
        }
    }


}









?>
