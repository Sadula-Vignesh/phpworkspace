<?php

function myName() {
  echo "my name is Vignesh";
}
myName();



function printEven($first, $last) {
  for($i = $first; $i <= $last; $i++) {
    if($i % 2 == 0) {
      echo $i . " ";
    }
  }
}

printEven(1, 20);




function greet($name) {
  echo "Hello, " . $name;
}

greet("John");



function randomPassword($length) {
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%";
  $password = "";
  for($i = 0; $i < $length; $i++) {
    $password .= $chars[rand(0, strlen($chars) - 1)];
  }
  echo $password;
}

randomPassword(8);



function areaOfCircle($r) {
  $area = pi() * $r * $r;
  echo "Area = " . $area;
}

areaOfCircle(5);


function reverseString($str) {
  echo strrev($str);
}

reverseString("Hello");


function power($num, $exp) {
  echo pow($num, $exp);
}

power(5, 4);


function add($a, $b) {
  return $a + $b;
}

echo add(5, 10);



function maxNumber($a, $b, $c) {
  return max($a, $b, $c);
}

echo maxNumber(10, 25, 15);


?>
