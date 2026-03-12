// OPERATORS

// ARITHMETIC
let sum = 10 + 5;
let difference = 10 - 5;
let product = 10 * 5;
let quotient = 10 / 5;
let remainder = 10 % 3;
let power = 2 ** 3;
let increment = 5;
increment++;
let decrement = 5;
decrement--;
console.log("ARITHMETIC - sum:", sum);
console.log("ARITHMETIC - difference:", difference);
console.log("ARITHMETIC - product:", product);
console.log("ARITHMETIC - quotient:", quotient);
console.log("ARITHMETIC - remainder:", remainder);
console.log("ARITHMETIC - power:", power);
console.log("ARITHMETIC - increment:", increment);
console.log("ARITHMETIC - decrement:", decrement);

// ASSIGNMENT
let x = 10;
x += 5;
x -= 3;
x *= 2;
x /= 4;
x %= 4;
x **= 3;
console.log("ASSIGNMENT - x after all operations:", x);

// COMPARISON
let equal = 5 == "5";
let strict = 5 === "5";
let notEqual = 5 != "5";
let strictNot = 5 !== "5";
let greater = 10 > 5;
let less = 10 < 5;
let greaterEq = 10 >= 10;
let lessEq = 10 <= 5;
console.log("COMPARISON - equal (5 == '5'):", equal);
console.log("COMPARISON - strict (5 === '5'):", strict);
console.log("COMPARISON - notEqual (5 != '5'):", notEqual);
console.log("COMPARISON - strictNot (5 !== '5'):", strictNot);
console.log("COMPARISON - greater (10 > 5):", greater);
console.log("COMPARISON - less (10 < 5):", less);
console.log("COMPARISON - greaterEq (10 >= 10):", greaterEq);
console.log("COMPARISON - lessEq (10 <= 5):", lessEq);

// LOGICAL
let and = true && false;
let or = true || false;
let not = !true;
console.log("LOGICAL - and (true && false):", and);
console.log("LOGICAL - or (true || false):", or);
console.log("LOGICAL - not (!true):", not);

// STRING
let firstName = "John";
let lastName = "Doe";
let fullName = firstName + " " + lastName;

console.log("STRING - fullName:", fullName);
