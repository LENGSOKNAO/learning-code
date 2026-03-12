// FUNCTION METHODS WITH CONSOLE

// FUNCTION DECLARATION
function greet(name) {
  return "Hello " + name;
}
console.log(greet("John"));

function add(a, b) {
  return a + b;
}
console.log(add(5, 3));

function multiply(a, b) {
  return a * b;
}
console.log(multiply(4, 2));

function isEven(num) {
  return num % 2 === 0;
}
console.log(isEven(10));
console.log(isEven(7));

function fullName(first, last) {
  return first + " " + last;
}
console.log(fullName("John", "Doe"));

// FUNCTION EXPRESSION
const greetExpr = function (name) {
  return "Hello " + name;
};
console.log(greetExpr("Jane"));

const subtract = function (a, b) {
  return a - b;
};
console.log(subtract(10, 4));

const square = function (num) {
  return num * num;
};
console.log(square(5));

const divide = function (a, b) {
  return a / b;
};
console.log(divide(10, 2));

const concat = function (str1, str2) {
  return str1 + str2;
};
console.log(concat("Hello", "World"));

// ARROW FUNCTION
const greetArrow = (name) => {
  return "Hello " + name;
};
console.log(greetArrow("Bob"));

const addArrow = (a, b) => a + b;
console.log(addArrow(15, 5));

const multiplyArrow = (a, b) => a * b;
console.log(multiplyArrow(3, 4));

const double = (num) => num * 2;
console.log(double(8));

const isPositive = (num) => num > 0;
console.log(isPositive(5));
console.log(isPositive(-3));

// FUNCTIONS WITH DEFAULT PARAMETERS
function power(base, exponent = 2) {
  return base ** exponent;
}
console.log(power(4));
console.log(power(4, 3));

function welcome(name = "Guest") {
  return "Welcome " + name;
}
console.log(welcome());
console.log(welcome("Alice"));

// FUNCTIONS WITH REST PARAMETERS
function sumAll(...numbers) {
  let total = 0;
  for (let num of numbers) {
    total += num;
  }
  return total;
}
console.log(sumAll(1, 2, 3));
console.log(sumAll(5, 10, 15, 20));

// CALLBACK FUNCTIONS
function processUser(name, callback) {
  return callback(name);
}
console.log(
  processUser("John", function (n) {
    return "Hello " + n;
  }),
);
console.log(processUser("Jane", (n) => "Hi " + n));

// FUNCTION RETURNING FUNCTION
function multiplier(factor) {
  return function (num) {
    return num * factor;
  };
}
let timesTwo = multiplier(2);
let timesThree = multiplier(3);
console.log(timesTwo(5));
console.log(timesThree(5));
