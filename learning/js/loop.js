 // LOOPS

// FOR LOOP
for (let i = 0; i < 5; i++) {
  console.log("For loop i:", i);
}

// WHILE LOOP
let i = 0;
while (i < 5) {
  console.log("While loop i:", i);
  i++;
}

// DO WHILE LOOP
let j = 0;
do {
  console.log("Do while j:", j);
  j++;
} while (j < 5);

// FOR OF LOOP (ARRAY)
let fruits = ["apple", "banana", "orange", "grape", "mango"];
for (let fruit of fruits) {
  console.log("Fruit:", fruit);
}

// FOR IN LOOP
let person = {
  name: "John",
  age: 25,
  city: "Boston",
  job: "developer",
  hobby: "gaming",
};
for (let key in person) {
  console.log(key + ":", person[key]);
}

// BREAK
for (let i = 0; i < 10; i++) {
  if (i === 5) break;
  console.log("Break at 5 - i:", i);
}

// CONTINUE
for (let i = 0; i < 10; i++) {
  if (i === 5) continue;
  console.log("Skip 5 - i:", i);
}