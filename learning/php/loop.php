<?php
// WHILE LOOP
echo "=== WHILE LOOP ===<br>";
$i = 1;

while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}

// DO-WHILE LOOP (executes at least once)
echo "<br>=== DO-WHILE LOOP ===<br>";
$j = 1;

do {
    echo "Number: $j<br>";
    $j++;
} while ($j <= 5);

// Always executes at least once
$k = 10;
do {
    echo "This runs once even though condition is false<br>";
    $k++;
} while ($k <= 5);

// FOR LOOP
echo "<br>=== FOR LOOP ===<br>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

?>