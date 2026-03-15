<?php

$a = 10;
$b = 3;

echo $a + $b;        // return 13 (Addition)
echo "<br>";
echo $a - $b;        // return 7 (Subtraction)
echo "<br>";
echo $a * $b;        // return 30 (Multiplication)
echo "<br>";
echo $a / $b;        // return 3.3333333333333 (Division)
echo "<br>";
echo $a % $b;        // return 1 (Modulus - remainder)
echo "<br>";
echo $a ** $b;       // return 1000 (Exponentiation - 10^3)
echo "<br>";

// ASSIGNMENT OPERATORS
$x = 5;              // Assign: $x = 5
echo $x;             // return 5
echo "<br>";

$x += 3;             // Same as: $x = $x + 3
echo $x;             // return 8
echo "<br>";

$x -= 2;             // Same as: $x = $x - 2
echo $x;             // return 6
echo "<br>";

$x *= 4;             // Same as: $x = $x * 4
echo $x;             // return 24
echo "<br>";

$x /= 3;             // Same as: $x = $x / 3
echo $x;             // return 8
echo "<br>";

$x %= 5;             // Same as: $x = $x % 5
echo $x;             // return 3
echo "<br>";

$str = "Hello";
$str .= " World";    // Same as: $str = $str . " World"
echo $str;           // return Hello World
echo "<br>";

 
?>