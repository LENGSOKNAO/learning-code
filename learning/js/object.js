// OBJECT METHODS WITH CONSOLE

// OBJECT LITERALS
let person = {
  name: "John",
  age: 30,
  city: "New York",
};
console.log(person);

let car = {
  brand: "Toyota",
  model: "Camry",
  year: 2022,
};
console.log(car);

let student = {
  id: 101,
  name: "Alice",
  grades: [85, 90, 78],
};
console.log(student);

let book = {
  title: "JavaScript Guide",
  author: "John Smith",
  pages: 500,
};
console.log(book);

let product = {
  name: "Laptop",
  price: 999,
  inStock: true,
};
console.log(product);

// ACCESSING PROPERTIES
console.log(person.name);
console.log(person["age"]);
console.log(car.brand);
console.log(student.grades[0]);
console.log(product["price"]);

// ADDING PROPERTIES
person.email = "john@email.com";
console.log(person);

car.color = "red";
console.log(car);

student.address = "123 Main St";
console.log(student);

// MODIFYING PROPERTIES
person.age = 31;
console.log(person);

car.year = 2023;
console.log(car);

product.price = 899;
console.log(product);

// DELETING PROPERTIES
delete person.city;
console.log(person);

delete car.model;
console.log(car);

// OBJECT METHODS
let user = {
  firstName: "John",
  lastName: "Doe",
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
  getAge: function () {
    return this.age;
  },
  setAge: function (newAge) {
    this.age = newAge;
  },
  greet: function () {
    return "Hello, I'm " + this.firstName;
  },
  updateName: function (first, last) {
    this.firstName = first;
    this.lastName = last;
  },
};

user.age = 25;
console.log(user.fullName());
console.log(user.getAge());
user.setAge(26);
console.log(user.age);
console.log(user.greet());
user.updateName("Jane", "Smith");
console.log(user.fullName());

// NESTED OBJECTS
let company = {
  name: "Tech Corp",
  address: {
    street: "123 Business Ave",
    city: "San Francisco",
    zip: 94105,
  },
  employees: {
    manager: "Bob",
    developer: "Alice",
    designer: "Eve",
  },
};
console.log(company);
console.log(company.address.city);
console.log(company.employees.developer);

// OBJECT CONSTRUCTOR
function Person(name, age, city) {
  this.name = name;
  this.age = age;
  this.city = city;
  this.greet = function () {
    return "Hi, I'm " + this.name;
  };
}

let person1 = new Person("Mike", 28, "Chicago");
let person2 = new Person("Sarah", 32, "Boston");

console.log(person1);
console.log(person2);
console.log(person1.greet());
console.log(person2.greet());

// OBJECT.KEYS, VALUES, ENTRIES
console.log(Object.keys(person));
console.log(Object.values(person));
console.log(Object.entries(person));

console.log(Object.keys(car));
console.log(Object.values(car));
console.log(Object.entries(car));

// OBJECT.ASSIGN
let target = { a: 1, b: 2 };
let source = { b: 3, c: 4 };
let merged = Object.assign(target, source);
console.log(merged);

// OBJECT.FREEZE
let frozen = Object.freeze({ name: "Frozen" });
// frozen.name = "New"; // This will fail silently
console.log(frozen);

// OBJECT.SEAL
let sealed = Object.seal({ name: "Sealed", age: 20 });
sealed.age = 21; // This works
// delete sealed.age; // This fails
console.log(sealed);

// OBJECT.HASOWN
console.log(person.hasOwnProperty("name"));
console.log(person.hasOwnProperty("email"));
