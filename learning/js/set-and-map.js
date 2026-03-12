// SET AND MAP

// SET

// CREATING SETS
let emptySet = new Set();
console.log("Empty set:", emptySet);

let numberSet = new Set([1, 2, 3, 4, 5]);
console.log("Number set:", numberSet);

let fruitSet = new Set(["apple", "banana", "orange"]);
console.log("Fruit set:", fruitSet);

let mixedSet = new Set([1, "hello", true, null]);
console.log("Mixed set:", mixedSet);

let duplicateSet = new Set([1, 1, 2, 2, 3, 3]); // Removes duplicates
console.log("Set with duplicates removed:", duplicateSet);

// ADDING ELEMENTS
fruitSet.add("grape");
console.log("After add grape:", fruitSet);

fruitSet.add("apple"); // Duplicate - won't be added
console.log("After adding duplicate apple:", fruitSet);

numberSet.add(6);
console.log("After add 6:", numberSet);

// CHECKING ELEMENTS
console.log("has 'banana':", fruitSet.has("banana"));
console.log("has 'kiwi':", fruitSet.has("kiwi"));
console.log("has 3:", numberSet.has(3));

// GETTING SIZE
console.log("fruitSet size:", fruitSet.size);
console.log("numberSet size:", numberSet.size);

// DELETING ELEMENTS
fruitSet.delete("banana");
console.log("After delete banana:", fruitSet);

numberSet.delete(4);
console.log("After delete 4:", numberSet);

// ITERATING SETS
console.log("ForEach on fruitSet:");
fruitSet.forEach((item) => console.log("  ", item));

console.log("For of on numberSet:");
for (let num of numberSet) {
  console.log("  ", num);
}

// CONVERTING SET TO ARRAY
let fruitArray = [...fruitSet];
console.log("Set to array:", fruitArray);

let numberArray = Array.from(numberSet);
console.log("Array.from:", numberArray);

// CLEARING SET
let tempSet = new Set([1, 2, 3]);
console.log("Before clear:", tempSet);
tempSet.clear();
console.log("After clear:", tempSet);

//  MAP

// CREATING MAPS
let emptyMap = new Map();
console.log("Empty map:", emptyMap);

let userMap = new Map([
  ["name", "John"],
  ["age", 30],
  ["city", "New York"],
]);
console.log("User map:", userMap);

let productMap = new Map([
  [1, "Laptop"],
  [2, "Mouse"],
  [3, "Keyboard"],
]);
console.log("Product map:", productMap);

let mixedMap = new Map([
  ["id", 101],
  [true, "active"],
  [null, "nothing"],
]);
console.log("Mixed map:", mixedMap);

// ADDING ELEMENTS
userMap.set("email", "john@email.com");
console.log("After set email:", userMap);

userMap.set("age", 31); // Overwrites existing
console.log("After update age:", userMap);

productMap.set(4, "Monitor");
console.log("After add product 4:", productMap);

// GETTING ELEMENTS
console.log("get name:", userMap.get("name"));
console.log("get age:", userMap.get("age"));
console.log("get city:", userMap.get("city"));
console.log("get product 2:", productMap.get(2));

// CHECKING KEYS
console.log("has name:", userMap.has("name"));
console.log("has email:", userMap.has("email"));
console.log("has 3:", productMap.has(3));

// GETTING SIZE
console.log("userMap size:", userMap.size);
console.log("productMap size:", productMap.size);

// DELETING ELEMENTS
userMap.delete("city");
console.log("After delete city:", userMap);

productMap.delete(2);
console.log("After delete product 2:", productMap);

// ITERATING MAPS
console.log("ForEach on userMap:");
userMap.forEach((value, key) => {
  console.log("  ", key + ":", value);
});

console.log("For of on productMap:");
for (let [key, value] of productMap) {
  console.log("  ", key + ":", value);
}

// KEYS, VALUES, ENTRIES
console.log("Keys:", [...userMap.keys()]);
console.log("Values:", [...userMap.values()]);
console.log("Entries:", [...userMap.entries()]);

// CLEARING MAP
let tempMap = new Map([
  ["a", 1],
  ["b", 2],
]);
console.log("Before clear:", tempMap);
tempMap.clear();
console.log("After clear:", tempMap);

// PRACTICAL EXAMPLES
let studentGrades = new Map([
  ["Alice", 85],
  ["Bob", 92],
  ["Charlie", 78],
]);
console.log("Student grades:", studentGrades);

studentGrades.set("Diana", 88);
console.log("Grades after adding Diana:", studentGrades);

console.log("Bob's grade:", studentGrades.get("Bob"));

let uniqueNumbers = new Set([1, 2, 3, 2, 1, 4, 5, 4]);
console.log("Unique numbers:", uniqueNumbers);

let visitedCountries = new Set(["USA", "Canada", "Mexico"]);
console.log("Visited countries:", visitedCountries);
console.log("Visited Canada?", visitedCountries.has("Canada"));
console.log("Visited France?", visitedCountries.has("France"));
