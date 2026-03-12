 
// CONDITIONAL STATEMENTS

// IF
if (age >= 18) {
  console.log("You are an adult");
}

// IF ELSE
if (age >= 18) {
  console.log("You can vote");
} else {
  console.log("You cannot vote");
}

// IF ELSE IF
if (age < 13) {
  console.log("Child");
} else if (age < 20) {
  console.log("Teenager");
} else if (age < 65) {
  console.log("Adult");
} else {
  console.log("Senior");
}

// SWITCH
let day = "Monday";
switch (day) {
  case "Monday":
    console.log("Start of week");
    break;
  case "Friday":
    console.log("Weekend coming");
    break;
  case "Saturday":
  case "Sunday":
    console.log("Weekend");
    break;
  default:
    console.log("Mid week");
}

// TERNARY
let status = age >= 18 ? "Adult" : "Minor";
console.log("Status:", status);

// MULTIPLE CONDITIONS
if (age >= 18 && isStudent) {
  console.log("Adult student");
}

if (age >= 65 || isStudent) {
  console.log("Discount eligible");
}

// NESTED IF
if (isLoggedIn) {
  if (settings.theme === "dark") {
    console.log("Dark mode enabled");
  } else {
    console.log("Light mode enabled");
  }
} else {
  console.log("Please login");
}

let testAge = 25;
let testStudent = true;
let testDay = "Sunday";

// Test 1
if (testAge >= 18) console.log("Test 1: Adult");

// Test 2
if (testStudent) console.log("Test 2: Is a student");

// Test 3
console.log("Test 3:", testAge >= 21 ? "Can drink" : "Cannot drink");

// Test 4
switch (testDay) {
  case "Saturday":
  case "Sunday":
    console.log("Test 4: It's weekend");
    break;
  default:
    console.log("Test 4: It's weekday");
}