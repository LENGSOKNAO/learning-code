// ERROR HANDLING WITH CONSOLE

try {
  let result = 10 / 0;
  console.log("Result:", result);
} catch (error) {
  console.log("Error:", error);
}

function testFinally() {
  try {
    console.log("Try block");
    return "Return from try";
  } catch (error) {
    console.log("Catch block");
  } finally {
    console.log("Finally block - runs before return");
  }
}
console.log(testFinally());
