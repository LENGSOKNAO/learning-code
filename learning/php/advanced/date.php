<?php
// mktime(hour, minute, second, month, day, year)
$d = mktime(0, 0, 0, 10, 3, 1975);

echo date('l', $d);

$d = strtotime("10:30pm November 15 2025");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d);

?>