<?php
// 1. CREATING ARRAYS

// Indexed array (old syntax)
$colors = array("Red", "Green", "Blue");

// Indexed array (short syntax)
$fruits = ["Apple", "Banana", "Orange"];

// Associative array
$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];

// Mixed array
$mixed = [1, "hello", true, 3.14, [1, 2]];

print_r($colors);
echo "<br>";
print_r($person);
echo "<br>";

// 2. ACCESSING ARRAY ELEMENTS

$fruits = ["Apple", "Banana", "Orange"];

echo $fruits[0] . "<br>";     // Apple
echo $fruits[1] . "<br>";     // Banana
echo $fruits[2] . "<br>";     // Orange

$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];

echo $person["name"] . "<br>"; // John
echo $person["age"] . "<br>";  // 25
echo $person["city"] . "<br>"; // New York

// Using curly braces (older syntax)
echo $fruits[0] . "<br>";      // Apple

// 3. ADDING/CHANGING ELEMENTS

$fruits = ["Apple", "Banana"];

// Add to end
$fruits[] = "Orange";          // [Apple, Banana, Orange]
$fruits[3] = "Grape";          // [Apple, Banana, Orange, Grape]

// Add with key
$fruits[10] = "Mango";         // [0=>Apple, 1=>Banana, 2=>Orange, 3=>Grape, 10=>Mango]

// Change value
$fruits[0] = "Pineapple";      // Change Apple to Pineapple

print_r($fruits);
echo "<br>";

// Associative array - add
$person = ["name" => "John"];
$person["age"] = 25;           // Add age
$person["city"] = "NYC";       // Add city

// Change
$person["name"] = "Jane";      // Change name

print_r($person);
echo "<br>";

// 4. REMOVING ELEMENTS

$fruits = ["Apple", "Banana", "Orange", "Grape", "Mango"];

// Remove last element
array_pop($fruits);            // removes Mango
print_r($fruits); // [Apple, Banana, Orange, Grape]
echo "<br>";

// Remove first element
array_shift($fruits);          // removes Apple
print_r($fruits); // [Banana, Orange, Grape]
echo "<br>";

// Remove specific element by key
unset($fruits[1]);             // removes Orange (index 1)
print_r($fruits); // [0=>Banana, 2=>Grape]
echo "<br>";

// Remove without reindexing
$fruits = ["Apple", "Banana", "Orange"];
unset($fruits[1]);
print_r($fruits); // [0=>Apple, 2=>Orange]
echo "<br>";

// Reindex array
$fruits = array_values($fruits);
print_r($fruits); // [0=>Apple, 1=>Orange]
echo "<br>";

// Remove by value
$fruits = ["Apple", "Banana", "Orange"];
if (($key = array_search("Banana", $fruits)) !== false) {
    unset($fruits[$key]);
}
print_r($fruits); // [0=>Apple, 2=>Orange]
echo "<br>";

// 5. ARRAY FUNCTIONS - COUNT & SIZE

$fruits = ["Apple", "Banana", "Orange"];

echo count($fruits) . "<br>";      // 3
echo sizeof($fruits) . "<br>";     // 3 (alias of count)

// Multidimensional count
$matrix = [[1,2], [3,4], [5,6]];
echo count($matrix) . "<br>";      // 3
echo count($matrix, COUNT_RECURSIVE) . "<br>"; // 9 (includes nested)

// 6. CHECKING EXISTENCE

$fruits = ["Apple", "Banana", "Orange"];
$person = ["name" => "John", "age" => 25];

// Check if key exists
echo isset($fruits[1]) ? "Exists<br>" : "Not exists<br>";     // Exists
echo isset($fruits[5]) ? "Exists<br>" : "Not exists<br>";     // Not exists

// For associative arrays
echo isset($person["name"]) ? "Exists<br>" : "Not exists<br>"; // Exists
echo isset($person["city"]) ? "Exists<br>" : "Not exists<br>"; // Not exists

// array_key_exists (checks key even if value is null)
$test = ["a" => null];
echo array_key_exists("a", $test) ? "Key exists<br>" : "No<br>"; // Yes
echo isset($test["a"]) ? "Yes<br>" : "No<br>";                    // No

// Check if value exists
echo in_array("Banana", $fruits) ? "Found<br>" : "Not found<br>"; // Found
echo in_array("Grape", $fruits) ? "Found<br>" : "Not found<br>";  // Not found

// Strict checking
$numbers = [1, "2", 3];
echo in_array(2, $numbers) ? "Found<br>" : "Not found<br>";       // Found (loose)
echo in_array(2, $numbers, true) ? "Found<br>" : "Not found<br>"; // Not found (strict)

// Get key of value
$key = array_search("Banana", $fruits);
echo "Key: $key<br>"; // 1

// 7. ARRAY SORTING

$numbers = [5, 2, 8, 1, 9];
$fruits = ["Banana", "Apple", "Orange"];
$person = ["name" => "John", "age" => 25, "city" => "NYC"];

// sort() - sort by values (reindex)
sort($numbers);
print_r($numbers); // [1,2,5,8,9]
echo "<br>";

// rsort() - reverse sort
rsort($numbers);
print_r($numbers); // [9,8,5,2,1]
echo "<br>";

// asort() - sort by values (keep keys)
asort($fruits);
print_r($fruits); // [1=>Apple, 0=>Banana, 2=>Orange] (keys preserved)
echo "<br>";

// arsort() - reverse sort by values (keep keys)
arsort($fruits);
print_r($fruits); // [2=>Orange, 0=>Banana, 1=>Apple]
echo "<br>";

// ksort() - sort by keys
ksort($person);
print_r($person); // [age=>25, city=>NYC, name=>John]
echo "<br>";

// krsort() - reverse sort by keys
krsort($person);
print_r($person); // [name=>John, city=>NYC, age=>25]
echo "<br>";

// usort() - custom sort
$numbers = [5, 2, 8, 1, 9];
usort($numbers, function($a, $b) {
    return $b - $a; // descending
});
print_r($numbers); // [9,8,5,2,1]
echo "<br>";

// Natural sort
$files = ["img10.jpg", "img2.jpg", "img1.jpg"];
natsort($files);
print_r($files); // [img1.jpg, img2.jpg, img10.jpg]
echo "<br>";

// 8. ARRAY MERGING & COMBINING

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [7, 8, 9];

// array_merge
$merged = array_merge($arr1, $arr2, $arr3);
print_r($merged); // [1,2,3,4,5,6,7,8,9]
echo "<br>";

// Associative merge (later keys overwrite)
$person1 = ["name" => "John", "age" => 25];
$person2 = ["age" => 30, "city" => "NYC"];
$merged = array_merge($person1, $person2);
print_r($merged); // [name=>John, age=>30, city=>NYC]
echo "<br>";

// array_combine (keys from one, values from another)
$keys = ["name", "age", "city"];
$values = ["John", 25, "NYC"];
$combined = array_combine($keys, $values);
print_r($combined); // [name=>John, age=>25, city=>NYC]
echo "<br>";

// + operator (union, doesn't overwrite)
$arr1 = ["a" => 1, "b" => 2];
$arr2 = ["b" => 3, "c" => 4];
$union = $arr1 + $arr2;
print_r($union); // [a=>1, b=>2, c=>4]
echo "<br>";

// 9. ARRAY SLICING & SPLICING

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// array_slice (extract portion)
$slice = array_slice($numbers, 2, 4);
print_r($slice); // [3,4,5,6]
echo "<br>";

// With negative offset
$slice = array_slice($numbers, -4, 3);
print_r($slice); // [7,8,9]
echo "<br>";

// Preserve keys
$assoc = ["a" => 1, "b" => 2, "c" => 3, "d" => 4];
$slice = array_slice($assoc, 1, 2, true);
print_r($slice); // [b=>2, c=>3]
echo "<br>";

// array_splice (remove and replace)
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$removed = array_splice($numbers, 2, 4);
echo "Removed: ";
print_r($removed); // [3,4,5,6]
echo "<br>Remaining: ";
print_r($numbers); // [1,2,7,8,9,10]
echo "<br>";

// Replace with new values
$numbers = [1, 2, 3, 4, 5];
array_splice($numbers, 2, 2, ["a", "b", "c"]);
print_r($numbers); // [1,2,a,b,c,5]
echo "<br>";

// 10. ARRAY WALK & MAP

$numbers = [1, 2, 3, 4, 5];

// array_map (returns new array)
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);
print_r($squared); // [1,4,9,16,25]
echo "<br>";

// With multiple arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$sum = array_map(function($a, $b) {
    return $a + $b;
}, $arr1, $arr2);
print_r($sum); // [5,7,9]
echo "<br>";

// array_walk (modifies original)
array_walk($numbers, function(&$value, $key) {
    $value = $value * 2;
});
print_r($numbers); // [2,4,6,8,10]
echo "<br>";

// array_walk_recursive (for nested arrays)
$nested = [1, [2, 3], [4, [5, 6]]];
array_walk_recursive($nested, function(&$value) {
    $value = $value * 2;
});
print_r($nested); // [2, [4,6], [8, [10,12]]]
echo "<br>";

// 11. ARRAY FILTER & REDUCE

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// array_filter
$even = array_filter($numbers, function($n) {
    return $n % 2 == 0;
});
print_r($even); // [2,4,6,8,10]
echo "<br>";

// Filter with keys (ARRAY_FILTER_USE_BOTH)
$assoc = ["a" => 1, "b" => 2, "c" => 3];
$filtered = array_filter($assoc, function($value, $key) {
    return $key != "b" && $value > 1;
}, ARRAY_FILTER_USE_BOTH);
print_r($filtered); // [c=>3]
echo "<br>";

// Remove empty values
$mixed = [0, 1, "", null, "hello", false, "world"];
$filtered = array_filter($mixed);
print_r($filtered); // [1=>1, 4=>hello, 6=>world] (removes 0, "", null, false)
echo "<br>";

// array_reduce
$numbers = [1, 2, 3, 4, 5];
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "Sum: $sum<br>"; // 15

$product = array_reduce($numbers, function($carry, $item) {
    return $carry * $item;
}, 1);
echo "Product: $product<br>"; // 120

// 12. ARRAY KEYS & VALUES

$person = ["name" => "John", "age" => 25, "city" => "NYC"];

// Get all keys
$keys = array_keys($person);
print_r($keys); // [name, age, city]
echo "<br>";

// Get all values
$values = array_values($person);
print_r($values); // [John, 25, NYC]
echo "<br>";

// Keys with search
$keys = array_keys($person, "John");
print_r($keys); // [0=>name]
echo "<br>";

// array_key_exists
echo array_key_exists("age", $person) ? "Yes<br>" : "No<br>"; // Yes

// key_exists (alias)
echo key_exists("city", $person) ? "Yes<br>" : "No<br>"; // Yes

// 13. ARRAY FLIP & REVERSE

$person = ["name" => "John", "age" => 25, "city" => "NYC"];

// array_flip (swap keys and values)
$flipped = array_flip($person);
print_r($flipped); // [John=>name, 25=>age, NYC=>city]
echo "<br>";

// array_reverse
$numbers = [1, 2, 3, 4, 5];
$reversed = array_reverse($numbers);
print_r($reversed); // [5,4,3,2,1]
echo "<br>";

// Preserve keys
$assoc = ["a" => 1, "b" => 2, "c" => 3];
$reversed = array_reverse($assoc, true);
print_r($reversed); // [c=>3, b=>2, a=>1]
echo "<br>";

// 14. ARRAY UNIQUE & DUPLICATES

$numbers = [1, 2, 2, 3, 3, 3, 4, 5, 5];

// Remove duplicates
$unique = array_unique($numbers);
print_r($unique); // [1,2,3,4,5]
echo "<br>";

// With associative arrays
$people = [
    "a" => "John",
    "b" => "Jane",
    "c" => "John",
    "d" => "Bob"
];
$unique = array_unique($people);
print_r($unique); // [a=>John, b=>Jane, d=>Bob]
echo "<br>";

// array_count_values (count occurrences)
$fruits = ["Apple", "Banana", "Apple", "Orange", "Banana", "Apple"];
$counts = array_count_values($fruits);
print_r($counts); // [Apple=>3, Banana=>2, Orange=>1]
echo "<br>";

// 15. ARRAY DIFF & INTERSECT

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$arr3 = [5, 6, 7, 8, 9];

// array_diff (values in arr1 not in others)
$diff = array_diff($arr1, $arr2);
print_r($diff); // [0=>1, 1=>2]
echo "<br>";

$diff = array_diff($arr1, $arr2, $arr3);
print_r($diff); // [0=>1, 1=>2]
echo "<br>";

// array_intersect (values in all arrays)
$intersect = array_intersect($arr1, $arr2);
print_r($intersect); // [2=>3, 3=>4, 4=>5]
echo "<br>";

// Associative versions
$person1 = ["name" => "John", "age" => 25, "city" => "NYC"];
$person2 = ["name" => "John", "age" => 30, "country" => "USA"];

// array_diff_assoc (checks keys and values)
$diff = array_diff_assoc($person1, $person2);
print_r($diff); // [age=>25, city=>NYC]
echo "<br>";

// array_intersect_assoc
$intersect = array_intersect_assoc($person1, $person2);
print_r($intersect); // [name=>John]
echo "<br>";

// array_diff_key (diff by keys)
$diff = array_diff_key($person1, $person2);
print_r($diff); // [city=>NYC]
echo "<br>";

// 16. ARRAY PUSH, POP, SHIFT, UNSHIFT

$stack = [1, 2, 3];

// array_push (add to end)
array_push($stack, 4, 5);
print_r($stack); // [1,2,3,4,5]
echo "<br>";

// Alternative (faster)
$stack[] = 6;
$stack[] = 7;
print_r($stack); // [1,2,3,4,5,6,7]
echo "<br>";

// array_pop (remove from end)
$last = array_pop($stack);
echo "Removed: $last<br>"; // 7
print_r($stack); // [1,2,3,4,5,6]
echo "<br>";

// array_shift (remove from beginning)
$first = array_shift($stack);
echo "Removed: $first<br>"; // 1
print_r($stack); // [2,3,4,5,6] (reindexed)
echo "<br>";

// array_unshift (add to beginning)
array_unshift($stack, 0, 1);
print_r($stack); // [0,1,2,3,4,5,6]
echo "<br>";

// 17. ARRAY RANDOM & SHUFFLE

$cards = ["Ace", "King", "Queen", "Jack", 10, 9, 8];

// array_rand (random keys)
$keys = array_rand($cards, 2); // 2 random keys
echo "Random keys: ";
print_r($keys);
echo "<br>";

// Get random values
$randomValue = $cards[array_rand($cards)];
echo "Random value: $randomValue<br>";

// shuffle (randomize order)
shuffle($cards);
print_r($cards);
echo "<br>";

// 18. ARRAY FILL & RANGE

// array_fill (create array with same value)
$filled = array_fill(0, 5, "hello");
print_r($filled); // [0=>hello, 1=>hello, 2=>hello, 3=>hello, 4=>hello]
echo "<br>";

// With custom start index
$filled = array_fill(5, 3, "test");
print_r($filled); // [5=>test, 6=>test, 7=>test]
echo "<br>";

// array_fill_keys (fill with keys)
$keys = ["a", "b", "c"];
$filled = array_fill_keys($keys, "value");
print_r($filled); // [a=>value, b=>value, c=>value]
echo "<br>";

// range (create range of values)
$numbers = range(1, 5);
print_r($numbers); // [1,2,3,4,5]
echo "<br>";

$numbers = range(1, 10, 2); // step 2
print_r($numbers); // [1,3,5,7,9]
echo "<br>";

$letters = range('a', 'e');
print_r($letters); // [a,b,c,d,e]
echo "<br>";

// 19. ARRAY COLUMN (for multidimensional)

$users = [
    ["id" => 1, "name" => "John", "age" => 25],
    ["id" => 2, "name" => "Jane", "age" => 30],
    ["id" => 3, "name" => "Bob", "age" => 35]
];

// Extract single column
$names = array_column($users, "name");
print_r($names); // [John, Jane, Bob]
echo "<br>";

// Use one column as keys
$usersById = array_column($users, "name", "id");
print_r($usersById); // [1=>John, 2=>Jane, 3=>Bob]
echo "<br>";

// 20. ARRAY CHUNK

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Split into chunks
$chunks = array_chunk($numbers, 3);
print_r($chunks); // [[1,2,3], [4,5,6], [7,8,9], [10]]
echo "<br>";

// Preserve keys
$assoc = ["a" => 1, "b" => 2, "c" => 3, "d" => 4];
$chunks = array_chunk($assoc, 2, true);
print_r($chunks); // [[a=>1, b=>2], [c=>3, d=>4]]
echo "<br>";

// 21. ARRAY PAD

$numbers = [1, 2, 3];

// Pad to size (add to right)
$padded = array_pad($numbers, 5, 0);
print_r($padded); // [1,2,3,0,0]
echo "<br>";

// Pad to size (add to left with negative)
$padded = array_pad($numbers, -5, 0);
print_r($padded); // [0,0,1,2,3]
echo "<br>";

// 22. ARRAY PRODUCT & SUM

$numbers = [1, 2, 3, 4, 5];

echo "Sum: " . array_sum($numbers) . "<br>"; // 15
echo "Product: " . array_product($numbers) . "<br>"; // 120

// 23. ARRAY SEARCH

$fruits = ["Apple", "Banana", "Orange", "Apple"];

// array_search (returns first key)
$key = array_search("Banana", $fruits);
echo "Key: $key<br>"; // 1

$key = array_search("Apple", $fruits);
echo "Key: $key<br>"; // 0

// array_keys with search value
$keys = array_keys($fruits, "Apple");
print_r($keys); // [0,3]
echo "<br>";

// in_array (check if exists)
echo in_array("Orange", $fruits) ? "Yes<br>" : "No<br>"; // Yes

// 24. ARRAY MULTISORT

$names = ["John", "Jane", "Bob", "Alice"];
$ages = [25, 30, 35, 28];

// Sort multiple arrays simultaneously
array_multisort($ages, $names);
print_r($ages); // [25,28,30,35]
echo "<br>";
print_r($names); // [John, Alice, Jane, Bob]
echo "<br>";

// Sort by one array, then another
$names = ["John", "Jane", "Bob", "Alice"];
$ages = [25, 30, 25, 28];
array_multisort($ages, SORT_ASC, $names, SORT_ASC);
print_r($ages); // [25,25,28,30]
echo "<br>";
print_r($names); // [Bob, John, Alice, Jane]
echo "<br>";

// 25. ARRAY REPLACE

$base = ["a" => 1, "b" => 2, "c" => 3];
$replace = ["b" => 20, "d" => 4];

// array_replace (overwrites values)
$result = array_replace($base, $replace);
print_r($result); // [a=>1, b=>20, c=>3, d=>4]
echo "<br>";

// array_replace_recursive (for nested)
$base = ["a" => 1, "b" => ["x" => 2, "y" => 3]];
$replace = ["b" => ["x" => 20]];
$result = array_replace_recursive($base, $replace);
print_r($result); // [a=>1, b=>[x=>20, y=>3]]
echo "<br>";

// 26. ARRAY CHANGE KEY CASE

$person = ["Name" => "John", "Age" => 25, "City" => "NYC"];

// Lowercase keys
$lower = array_change_key_case($person, CASE_LOWER);
print_r($lower); // [name=>John, age=>25, city=>NYC]
echo "<br>";

// Uppercase keys
$upper = array_change_key_case($person, CASE_UPPER);
print_r($upper); // [NAME=>John, AGE=>25, CITY=>NYC]
echo "<br>";

// 27. ARRAY POINTER FUNCTIONS

$fruits = ["Apple", "Banana", "Orange", "Grape"];

echo current($fruits) . "<br>"; // Apple
echo key($fruits) . "<br>";      // 0

next($fruits); // move to Banana
echo current($fruits) . "<br>"; // Banana

next($fruits); // move to Orange
echo current($fruits) . "<br>"; // Orange

prev($fruits); // move back to Banana
echo current($fruits) . "<br>"; // Banana

end($fruits); // move to last
echo current($fruits) . "<br>"; // Grape

reset($fruits); // move to first
echo current($fruits) . "<br>"; // Apple

// 28. EXTRACT & COMPACT

// extract (creates variables from array)
$person = ["name" => "John", "age" => 25, "city" => "NYC"];
extract($person);
echo "$name is $age years old from $city<br>"; // John is 25 years old from NYC

// compact (creates array from variables)
$name = "Jane";
$age = 30;
$city = "LA";
$data = compact("name", "age", "city");
print_r($data); // [name=>Jane, age=>30, city=>LA]
echo "<br>";

// 29. ARRAY LIST (destructuring)

$info = ["John", 25, "NYC"];

// list() assigns values to variables
list($name, $age, $city) = $info;
echo "$name, $age, $city<br>"; // John, 25, NYC

// Short syntax (PHP 7.1+)
[$name, $age, $city] = $info;
echo "$name, $age, $city<br>"; // John, 25, NYC

// Skip elements
[, $age, ] = $info;
echo "Age: $age<br>"; // 25

// With associative (PHP 7.1+)
$person = ["name" => "John", "age" => 25];
["name" => $n, "age" => $a] = $person;
echo "$n is $a<br>"; // John is 25
?>