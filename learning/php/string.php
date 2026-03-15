<?php
$string = 'Hello world';

echo strlen($string);           // return length 11
echo "<br>";

echo str_word_count($string);    // return 2 words
echo "<br>";

echo str_contains($string, 'world'); // return 1 (true)
echo "<br>";

echo strpos($string, 'world');   // return 6 (position where 'world' starts)
echo "<br>";

echo str_starts_with($string, 'Hello'); // return 1 (true)
echo "<br>";

echo str_ends_with($string, 'world'); // return 1 (true) - fixed from 'Hello' to 'world'
echo "<br>";

// Additional useful string functions:
echo "=== MORE STRING FUNCTIONS ===<br>";

echo strtoupper($string);        // return HELLO WORLD
echo "<br>";

echo strtolower($string);        // return hello world
echo "<br>";

echo ucfirst($string);           // return Hello world
echo "<br>";

echo ucwords($string);           // return Hello World
echo "<br>";

echo strrev($string);            // return dlrow olleH
echo "<br>";

echo substr($string, 0, 5);      // return Hello
echo "<br>";

echo substr($string, 6);         // return world
echo "<br>";

echo str_replace('world', 'PHP', $string); // return Hello PHP
echo "<br>";

echo trim('  Hello world  ');    // return Hello world (removes spaces)
echo "<br>";

echo str_repeat($string, 2);      // return Hello worldHello world
echo "<br>";

echo str_shuffle($string);        // return random shuffle (e.g., "lodelH row")
echo "<br>";

echo strcmp($string, 'Hello world'); // return 0 (strings are equal)
echo "<br>";

echo strcasecmp('HELLO WORLD', $string); // return 0 (case-insensitive compare)
echo "<br>";

// Convert string to array
print_r(explode(' ', $string));   // return Array ( [0] => Hello [1] => world )
echo "<br>";

// Get character at position
echo $string[0];                  // return H
echo "<br>";
echo $string[6];                  // return w
echo "<br>";

// Check if string is empty
echo empty($string) ? 'empty' : 'not empty'; // return not empty
echo "<br>";

// Get string type
echo gettype($string);            // return string
echo "<br>";

// Count specific substring occurrences
echo substr_count($string, 'o');  // return 2 (counts 'o' occurrences)
echo "<br>";

// Find last occurrence
echo strrpos($string, 'o');       // return 7 (last position of 'o')
echo "<br>";

// Case-insensitive position
echo stripos($string, 'WORLD');    // return 6 (case-insensitive find)
echo "<br>";
?>