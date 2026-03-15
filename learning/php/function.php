<?php
 
function sayHello() {
    echo "Hello World<br>";
}

sayHello(); // call function

function greet($name) {
    echo "Hello, $name!<br>";
}

greet("John");
greet("Jane");

// Multiple parameters
function add($a, $b) {
    echo $a + $b . "<br>";
}

add(5, 3);
add(10, 20);

 
function multiply($a, $b) {
    return $a * $b;
}

$result = multiply(5, 4);
echo "Result: $result<br>";

 
function power($base, $exponent = 2) {
    return pow($base, $exponent);
}

echo power(5) . "<br>";      // 25 (5^2)
echo power(5, 3) . "<br>";    // 125 (5^3)

 
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, 10) . "<br>"; // 15

function greetUser(?string $name) {
    if ($name === null) {
        echo "Hello, Guest!<br>";
    } else {
        echo "Hello, $name!<br>";
    }
}

greetUser("John");
greetUser(null);

function processValue(int|string $value): void {
    if (is_int($value)) {
        echo "Integer: " . ($value * 2) . "<br>";
    } else {
        echo "String: " . strtoupper($value) . "<br>";
    }
}

processValue(10);
processValue("hello");

 
function sumAll(...$numbers) {
    return array_sum($numbers);
}

echo sumAll(1, 2, 3, 4, 5) . "<br>"; // 15
echo sumAll(10, 20) . "<br>";         // 30

// With other parameters
function displayList($title, ...$items) {
    echo "$title: ";
    foreach ($items as $item) {
        echo "$item ";
    }
    echo "<br>";
}

displayList("Fruits", "Apple", "Banana", "Orange");

 
function addTen(&$num) {
    $num += 10;
}

$value = 5;
addTen($value);
echo $value . "<br>"; // 15 (original changed)
 
// CALLBACK FUNCTIONS 
function processArray($array, $callback) {
    $result = [];
    foreach ($array as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$doubled = processArray($numbers, function($n) {
    return $n * 2;
});
print_r($doubled); // [2,4,6,8,10]
echo "<br>";

// Using built-in callbacks
$filtered = array_filter($numbers, function($n) {
    return $n % 2 == 0;
});
print_r($filtered); // [2,4]
echo "<br>";

// GENERATORS (yield)
function countToFive() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}

foreach (countToFive() as $value) {
    echo "$value ";
}
echo "<br>";

// Generator with keys
function rangeWithKeys($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield "num$i" => $i;
    }
}

foreach (rangeWithKeys(1, 3) as $key => $value) {
    echo "$key: $value<br>";
}

// FUNCTION WITH VARIABLE NUMBER OF ARGUMENTS (old style)
echo "<br>=== FUNC_NUM_ARGS / FUNC_GET_ARGS ===<br>";

function sumOld() {
    $args = func_get_args();
    $count = func_num_args();
    echo "Number of arguments: $count<br>";
    return array_sum($args);
}

echo "Sum: " . sumOld(1, 2, 3, 4, 5) . "<br>";

// NAMED ARGUMENTS (PHP 8+)
echo "<br>=== NAMED ARGUMENTS ===<br>";

function createUser($name, $age = 30, $city = "Unknown") {
    echo "Name: $name, Age: $age, City: $city<br>";
}

// Skip default parameters
createUser(name: "John", city: "New York");
createUser(name: "Jane", age: 25);

?>