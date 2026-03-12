// ARRAY METHODS WITH CONSOLE

let fruits = ["apple", "banana", "orange"];
let numbers = [1, 2, 3, 4, 5];
let mixed = [1, "hello", true, null];
let matrix = [
  [1, 2],
  [3, 4],
];
let empty = [];

console.log("fruits:", fruits);
console.log("numbers:", numbers);
console.log("mixed:", mixed);
console.log("matrix:", matrix);
console.log("empty:", empty);

// ACCESSING ELEMENTS
console.log("First fruit:", fruits[0]);
console.log("Last fruit:", fruits[fruits.length - 1]);
console.log("Second number:", numbers[1]);

// LENGTH PROPERTY
console.log("fruits length:", fruits.length);
console.log("numbers length:", numbers.length);

// ADDING ELEMENTS
fruits.push("grape"); // Add to end
console.log("After push:", fruits);

fruits.unshift("mango"); // Add to beginning
console.log("After unshift:", fruits);

// REMOVING ELEMENTS
fruits.pop(); // Remove from end
console.log("After pop:", fruits);

fruits.shift(); // Remove from beginning
console.log("After shift:", fruits);

// FIND INDEX
console.log("indexOf 'banana':", fruits.indexOf("banana"));
console.log("includes 'apple':", fruits.includes("apple"));

// JOIN AND SPLIT
console.log("join('-'):", fruits.join("-"));
console.log("toString():", fruits.toString());

// CONCATENATE
let moreFruits = ["kiwi", "pear"];
let allFruits = fruits.concat(moreFruits);
console.log("concat:", allFruits);

// SLICE (doesn't modify original)
let sliced = fruits.slice(1, 3);
console.log("slice(1,3):", sliced);
console.log("original after slice:", fruits);

// SPLICE (modifies original)
fruits.splice(1, 1, "blueberry"); // Replace at index
console.log("after splice(1,1,'blueberry'):", fruits);

fruits.splice(2, 1); // Remove at index
console.log("after splice(2,1):", fruits);

// REVERSE
let reversed = [...fruits].reverse();
console.log("reverse:", reversed);

// SORT
let unsorted = [3, 1, 4, 2, 5];
unsorted.sort();
console.log("sort:", unsorted);

// FILL
let filled = new Array(5).fill(0);
console.log("fill(0):", filled);

// CHECK IF ARRAY
console.log("Array.isArray(fruits):", Array.isArray(fruits));
console.log("Array.isArray('hello'):", Array.isArray("hello"));

// SPREAD OPERATOR
let copy = [...fruits];
console.log("spread copy:", copy);

let combined = [...fruits, ...numbers];
console.log("spread combine:", combined);
