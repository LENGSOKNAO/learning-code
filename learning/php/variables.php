<?php

// SCALAR TYPES
echo "<h2>Scalar Types</h2>";

$integer = 42;
$float = 3.7;  
$string = 'string php';
$boolean = true;

echo "Integer: " . $integer . " - Type: " . gettype($integer) . "<br>";
echo "Float: " . $float . " - Type: " . gettype($float) . "<br>";
echo "String: " . $string . " - Type: " . gettype($string) . "<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . " - Type: " . gettype($boolean) . "<br>";

echo "<br>";

// COMPOUND TYPES
echo "<h2>Compound Types</h2>";

$array = [20, 242, 553];
$object = new stdClass();
$object->name = "Test Object";
$object->value = 123;
$callable = function() { return "Hello from callable!"; };

echo "Array: ";
print_r($array);
echo " - Type: " . gettype($array) . "<br>";

echo "Object: ";
var_dump($object);
echo "<br>";

echo "Callable result: " . $callable() . " - Type: " . gettype($callable) . "<br>";

echo "<br>";

// SPECIAL TYPES
echo "<h2>Special Types</h2>";

$null = null;

// Create a file for resource example
$filename = 'test_file.txt';
file_put_contents($filename, 'This is a test file content.');
$resource = fopen($filename, "r");

echo "Null: " . ($null === null ? 'null' : 'not null') . " - Type: " . gettype($null) . "<br>";
echo "Resource: " . get_resource_type($resource) . " - Type: " . gettype($resource) . "<br>";

// Don't forget to close the resource
fclose($resource);

echo "<br>";

// ADDITIONAL TESTING
echo "<h2>Variable Dumping (var_dump)</h2>";
echo "<pre>";
echo "Integer: ";
var_dump($integer);
echo "Float: ";
var_dump($float);
echo "String: ";
var_dump($string);
echo "Boolean: ";
var_dump($boolean);
echo "Array: ";
var_dump($array);
echo "Object: ";
var_dump($object);
echo "Callable: ";
var_dump($callable);
echo "Null: ";
var_dump($null);
echo "Resource (closed): ";
var_dump($resource);
echo "</pre>";

// SIMPLE OUTPUT OF ALL VARIABLES
echo "<h2>Simple Echo Output</h2>";
echo "Integer: $integer<br>";
echo "Float: $float<br>";
echo "String: $string<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
echo "Array first element: " . $array[0] . "<br>";
echo "Object property: " . $object->name . "<br>";

 
?>