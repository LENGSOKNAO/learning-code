
<?php

$integer = 42;
$float = 3.7;  
$string = 'string php';
$boolean = true;
$array = [20, 242, 553];
$object = new stdClass();
$object->name = "Test Object";
$object->value = 123;
$callable = function() { return "Hello from callable!"; };
$null = null;
$filename = 'test_file.txt';
file_put_contents($filename, 'This is a test file content.');
$resource = fopen($filename, "r");



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

?>