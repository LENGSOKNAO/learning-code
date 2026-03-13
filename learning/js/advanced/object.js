// OBJECTS

// Definitions

const obj = {
  name: "meni",
  age: 30,
  gender: "women",
  color: "red",
  // This
  data: function () {
    return this.name + this.age;
  },
  // Get
  get lang() {
    return this.age;
  },
  // Set

  set langSet(color) {
    this.color = color;
  },
};

const newObj = Object.create(obj);
newObj.name = "nana";

console.log(newObj);
console.log(obj.lang);
console.log((obj.langSet = "yellow"));

// Prototypes

function Person(first, last, age, eyecolor) {
  this.firstName = first;
  this.lastName = last;
  this.age = age;
  this.eyeColor = eyecolor;
}

const myFather = new Person("John", "Doe", 50, "blue");
const myMother = new Person("Sally", "Rally", 48, "green");

console.log(myFather);
console.log(myMother);
