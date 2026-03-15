<?php
// BASIC MATH OPERATIONS
 
$a = 10;
$b = 3;

echo $a + $b;        // return 13 (addition)
echo "<br>";
echo $a - $b;        // return 7 (subtraction)
echo "<br>";
echo $a * $b;        // return 30 (multiplication)
echo "<br>";
echo $a / $b;        // return 3.3333333333333 (division)
echo "<br>";
echo $a % $b;        // return 1 (modulus/remainder)
echo "<br>";
echo $a ** $b;       // return 1000 (exponentiation - 10^3)
echo "<br>";

// BASIC MATH FUNCTIONS

echo abs(-10);            // return 10 (absolute value)
echo "<br>";
echo ceil(4.2);           // return 5 (round up)
echo "<br>";
echo floor(4.9);          // return 4 (round down)
echo "<br>";
echo round(4.5);          // return 5 (round to nearest)
echo "<br>";
echo round(4.678, 2);     // return 4.68 (round with precision)
echo "<br>";
echo max(5, 10, 3, 8);    // return 10 (maximum value)
echo "<br>";
echo min(5, 10, 3, 8);    // return 3 (minimum value)
echo "<br>";
echo pow(2, 4);           // return 16 (2^4)
echo "<br>";
echo sqrt(16);            // return 4 (square root)
echo "<br>";

// RANDOM NUMBERS

echo rand();              // return random number (e.g., 123456789)
echo "<br>";
echo rand(1, 10);         // return random between 1-10 (e.g., 7)
echo "<br>";
echo mt_rand();           // return random number (better algorithm)
echo "<br>";
echo mt_rand(1, 100);     // return random between 1-100 (e.g., 42)
echo "<br>";

// NUMBER FORMATTING

echo number_format(1234.5678);                 // return 1,235
echo "<br>";
echo number_format(1234.5678, 2);               // return 1,234.57
echo "<br>";
echo number_format(1234.5678, 2, '.', ',');     // return 1,234.57
echo "<br>";

// TRIGONOMETRY FUNCTIONS

echo sin(90);             // return 0.89399666360056
echo "<br>";
echo cos(0);              // return 1
echo "<br>";
echo tan(45);             // return 1.6197751905439
echo "<br>";
echo deg2rad(180);        // return 3.1415926535898 (π radians)
echo "<br>";
echo rad2deg(3.14159);    // return 180 (degrees)
echo "<br>";

// LOGARITHMIC FUNCTIONS

echo log(10);             // return 2.302585092994 (natural log)
echo "<br>";
echo log10(1000);         // return 3 (log base 10)
echo "<br>";
echo exp(2);              // return 7.3890560989307 (e^2)
echo "<br>";

// INTEGER FUNCTIONS

echo intdiv(10, 3);       // return 3 (integer division)
echo "<br>";
echo is_int(10);          // return 1 (true)
echo "<br>";
echo is_int(10.5);        // return nothing (false)
echo "<br>";
echo is_numeric('123');    // return 1 (true)
echo "<br>";
echo is_numeric('abc');    // return nothing (false)
echo "<br>";

// CONSTANTS

echo M_PI;                // return 3.1415926535898 (π)
echo "<br>";
echo M_E;                 // return 2.718281828459 (e)
echo "<br>";
echo M_LOG2E;             // return 1.442695040889 (log₂e)
echo "<br>";
echo M_LOG10E;            // return 0.43429448190325 (log₁₀e)
echo "<br>";

// ADVANCED MATH FUNCTIONS

echo bindec('1010');       // return 10 (binary to decimal)
echo "<br>";
echo decbin(10);           // return 1010 (decimal to binary)
echo "<br>";
echo hexdec('A');          // return 10 (hex to decimal)
echo "<br>";
echo dechex(10);           // return a (decimal to hex)
echo "<br>";
echo octdec('12');         // return 10 (octal to decimal)
echo "<br>";
echo decoct(10);           // return 12 (decimal to octal)
echo "<br>";

// FLOATING POINT FUNCTIONS

echo fmod(10.5, 3);        // return 1.5 (floating point modulo)
echo "<br>";
echo is_float(10.5);       // return 1 (true)
echo "<br>";
echo is_finite(log(0));    // return nothing (false - infinite)
echo "<br>";
echo is_nan(acos(2));      // return 1 (true - not a number)
echo "<br>";

// POWER FUNCTIONS

echo pow(2, 3);            // return 8 (2^3)
echo "<br>";
echo sqrt(25);             // return 5 (square root)
echo "<br>";
echo exp(1);               // return 2.718281828459 (e^1)
echo "<br>";
echo hypot(3, 4);          // return 5 (sqrt(3²+4²))
echo "<br>";

// ROUNDING FUNCTIONS

$num = 1234.5678;

echo round($num);          // return 1235
echo "<br>";
echo round($num, 2);       // return 1234.57
echo "<br>";
echo ceil($num);           // return 1235
echo "<br>";
echo floor($num);          // return 1234
echo "<br>";

// SIGN FUNCTIONS

echo abs(-15);             // return 15
echo "<br>";
// No direct sign function in PHP, but can use:
echo (10 <=> 0);           // return 1 (spaceship operator - sign)
echo "<br>";
echo ((-5) <=> 0);         // return -1
echo "<br>";
echo (0 <=> 0);            // return 0
echo "<br>";

// PRACTICAL EXAMPLES

// Generate random password
echo "Random number: " . rand(1000, 9999) . "<br>";

// Calculate percentage
$score = 85;
$total = 100;
echo "Percentage: " . ($score / $total * 100) . "%<br>";

// Area of circle
$radius = 5;
echo "Circle area: " . (M_PI * pow($radius, 2)) . "<br>";

// Distance between two points
$x1 = 0; $y1 = 0;
$x2 = 3; $y2 = 4;
echo "Distance: " . sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2)) . "<br>";

// Format price
$price = 1999.95;
echo "Price: $" . number_format($price, 2) . "<br>";
?>