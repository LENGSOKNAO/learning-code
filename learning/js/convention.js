// NAMING CONVENTIONS WITH CONSOLE

// VARIABLES (camelCase)
let firstName = "John";
let lastName = "Doe";
let isLoggedIn = true;
let userAge = 25;
let shoppingCart = [];
console.log(firstName, lastName, isLoggedIn, userAge, shoppingCart);

// CONSTANTS (UPPER_CASE)
const MAX_SIZE = 100;
const API_KEY = "abc123xyz";
const DEFAULT_COLOR = "blue";
const PI = 3.14159;
const BASE_URL = "https://api.example.com";
console.log(MAX_SIZE, API_KEY, DEFAULT_COLOR, PI, BASE_URL);

// FUNCTIONS (camelCase, verbs)
function getUserData() {
  return "user data";
}
function calculateTotal() {
  return 100;
}
function isValidEmail() {
  return true;
}
function fetchData() {
  return "data";
}
function handleClick() {
  console.log("clicked");
}
console.log(getUserData(), calculateTotal(), isValidEmail(), fetchData());

// BOOLEAN VARIABLES (is, has, can)
let isActive = true;
let hasPermission = false;
let canEdit = true;
let isVisible = false;
let hasItems = true;
console.log(isActive, hasPermission, canEdit, isVisible, hasItems);

// ARRAYS (plural nouns)
let users = ["John", "Jane", "Bob"];
let items = [1, 2, 3, 4];
let colors = ["red", "blue", "green"];
let fruits = ["apple", "banana"];
let numbers = [10, 20, 30];
console.log(users, items, colors, fruits, numbers);

// OBJECTS (singular nouns)
let user = { name: "John", age: 30 };
let product = { id: 1, price: 100 };
let config = { theme: "dark", lang: "en" };
let car = { brand: "Toyota", year: 2022 };
let person = { first: "John", last: "Doe" };
console.log(user, product, config, car, person);

// CLASSES (PascalCase)
class UserAccount {
  constructor(name) {
    this.name = name;
  }
}
class ProductItem {
  constructor(id) {
    this.id = id;
  }
}
class DataService {
  fetch() {
    return "data";
  }
}
class HttpRequest {
  send() {
    return "sent";
  }
}
class ShoppingCart {
  add() {
    return "added";
  }
}
let userAcc = new UserAccount("John");
let productItem = new ProductItem(1);
console.log(userAcc, productItem);

// PRIVATE VARIABLES (_underscore)
let _privateVar = "secret";
let _internalValue = 42;
let _cache = {};
let _config = { debug: true };
let _temp = null;
console.log(_privateVar, _internalValue, _cache, _config, _temp);

// METHODS (camelCase, verbs)
let calculator = {
  addNumbers(a, b) {
    return a + b;
  },
  subtractNumbers(a, b) {
    return a - b;
  },
  multiplyNumbers(a, b) {
    return a * b;
  },
  divideNumbers(a, b) {
    return a / b;
  },
  resetCalculator() {
    return 0;
  },
};
console.log(calculator.addNumbers(5, 3));
console.log(calculator.subtractNumbers(5, 3));
console.log(calculator.multiplyNumbers(5, 3));
console.log(calculator.divideNumbers(5, 3));
console.log(calculator.resetCalculator());

// EVENT HANDLERS (handle)
function handleSubmit() {
  return "submitted";
}
function handleChange() {
  return "changed";
}
function handleClick2() {
  return "clicked";
}
function handleKeyPress() {
  return "key pressed";
}
function handleMouseOver() {
  return "mouse over";
}
console.log(
  handleSubmit(),
  handleChange(),
  handleClick2(),
  handleKeyPress(),
  handleMouseOver(),
);
