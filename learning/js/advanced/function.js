// FUNCTION

// DEFINITION

// Declaration
function myFu(x, y) {
  return z - y;
}

// Expression
const myFuEx = function (a, b) {
  return a - b;
};

// Arrow
const myFuAr = (a, b) => {
  return a - b;
};
// Constructor
const myFuCon = new Function("a", "b", "return a * b");

// Method
const obj = {
  myFuMe(a, b) {
    return x * y;
  },
};

// CallBack Function

setTimeout(myFuCall, 3000);

function myFuCall() {
  console.log("i love you");
}

const list = [20, 300, 400];
list.forEach(getList);

function getList(values) {
  console.log(values);
}

// This

const data = {
  firstName: "mane",
  lastName: "ya",
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
};

console.log(data.fullName());

// Call

const person = {
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
};
const person1 = {
  firstName: "John",
  lastName: "Doe",
};
const person2 = {
  firstName: "Mary",
  lastName: "Doe",
};

console.log(person.fullName.call(person2));

// Bind

let name = data.fullName.bind(person1);

console.log(name());
