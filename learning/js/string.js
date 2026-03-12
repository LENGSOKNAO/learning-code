// STRING METHODS

let str1 = "Hello World";
let str2 = "JavaScript";
let str3 = `Template literal`;
let str4 = new String("String object");

// STRING PROPERTIES
console.log("Length:", str1.length); // 11

// CASE METHODS
console.log("toUpperCase:", str1.toUpperCase()); // "HELLO WORLD"
console.log("toLowerCase:", str1.toLowerCase()); // "hello world"

// EXTRACTING CHARACTERS
console.log("charAt(0):", str1.charAt(0)); // "H"
console.log("charCodeAt(0):", str1.charCodeAt(0)); // 72
console.log("at(0):", str1.at(0)); // "H"
console.log("at(-1):", str1.at(-1)); // "d" (last character)
console.log("index 0:", str1[0]); // "H"

// SEARCHING METHODS
console.log("indexOf('o'):", str1.indexOf("o")); // 4
console.log("lastIndexOf('o'):", str1.lastIndexOf("o")); // 7
console.log("includes('World'):", str1.includes("World")); // true
console.log("startsWith('Hello'):", str1.startsWith("Hello")); // true
console.log("endsWith('World'):", str1.endsWith("World")); // true
console.log("search('World'):", str1.search("World")); // 6

// EXTRACTING SUBSTRINGS
console.log("slice(0,5):", str1.slice(0, 5)); // "Hello"
console.log("slice(6):", str1.slice(6)); // "World"
console.log("slice(-5):", str1.slice(-5)); // "World"
console.log("substring(0,5):", str1.substring(0, 5)); // "Hello"
console.log("substr(6,3):", str1.substr(6, 3)); // "Wor" (deprecated)

// REPLACING
console.log("replace('World', 'JS'):", str1.replace("World", "JS")); // "Hello JS"
console.log("replaceAll('o', '0'):", str1.replaceAll("o", "0")); // "Hell0 W0rld"

// SPLITTING AND JOINING
console.log("split(' '):", str1.split(" ")); // ["Hello", "World"]
console.log("split(''):", "abc".split("")); // ["a", "b", "c"]
console.log("concat:", str1.concat(" ", "!!!")); // "Hello World !!!"
console.log("join:", ["a", "b", "c"].join("-")); // "a-b-c"

// TRIMMING
let messy = "  Hello  ";
console.log("trim:", messy.trim()); // "Hello"
console.log("trimStart:", messy.trimStart()); // "Hello  "
console.log("trimEnd:", messy.trimEnd()); // "  Hello"

// PADDING
console.log("padStart(10,'*'):", "5".padStart(10, "*")); // "*********5"
console.log("padEnd(10,'*'):", "5".padEnd(10, "*")); // "5*********"

// REPEATING
console.log("repeat(3):", "Ha".repeat(3)); // "HaHaHa"

// TEMPLATE LITERALS
let name = "John";
let age = 25;
console.log(`My name is ${name} and I am ${age} years old`);

// ESCAPE CHARACTERS
console.log("New line:\nNext line");
console.log("Tab:\tIndented");
console.log("Backslash: \\");
console.log('Quote: "Hello"');
console.log("Single quote: \'Hello\'");

// STRING CONVERSION
let num = 123;
console.log("String(123):", String(num)); // "123"
console.log("toString:", num.toString()); // "123"
console.log("toFixed:", (3.14159).toFixed(2)); // "3.14"

// COMPARISON
console.log("'a' < 'b':", "a" < "b"); // true
console.log("'apple' < 'banana':", "apple" < "banana"); // true
console.log("'A' < 'a':", "A" < "a"); // true

// TEST WITH CONSOLE
console.log("\n=== STRING TESTS ===");
let testStr = "JavaScript is awesome";

console.log("Original:", testStr);
console.log("Length:", testStr.length);
console.log("First char:", testStr[0]);
console.log("Last char:", testStr[testStr.length - 1]);
console.log("Contains 'Script':", testStr.includes("Script"));
console.log("Uppercase:", testStr.toUpperCase());
console.log("Words:", testStr.split(" "));
console.log("Replace:", testStr.replace("awesome", "great"));
