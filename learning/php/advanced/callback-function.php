<?php
function myFu($n){
    return ($n + $n);
}

$n = [12, 42, 50, 100];

print_r(array_map('myFu', $n));
?>