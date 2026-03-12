// SCOPE WITH CONSOLE

let globalName = "John"; // Global scope

function showName() {
  let localName = "Jane"; // Local scope
  console.log("Inside function - globalName:", globalName);
  console.log("Inside function - localName:", localName);
}

showName();
console.log("Outside function - globalName:", globalName);
// console.log(localName); // Error: localName is not defined

// EXAMPLE 2: BLOCK SCOPE
if (true) {
  let blockLet = "I'm with let";
  var blockVar = "I'm with var";
  console.log("Inside block - blockLet:", blockLet);
  console.log("Inside block - blockVar:", blockVar);
}

// console.log(blockLet); // Error: blockLet is not defined
console.log("Outside block - blockVar:", blockVar); // Works with var
