class Car {
  constructor(name, year, color) {
    this.name = name;
    this.year = year;
    this.color = color;
  }
  // method 1
  name() {
    return "My car is" + this.name;
  }
  // method 2
  year() {
    return "Year is" + this.year;
  }
  // Static use for defined on the class itself
  static test(color) {
    return this.color;
  }
}

// Inheritance
class Model extends Car {
  constructor(name, year, color, mode) {
    super(name, year, color);
    this.mode = mode;
  }
  show() {
    return this.name() + this.mode;
  }
}

let myCar = new Model("Ford", "2003", "red", "Mustang");

console.log(myCar);
