// DATE METHODS WITH CONSOLE

// CREATING DATES
let currentDate = new Date();
console.log("Current date:", currentDate);

let specificDate = new Date("2024-01-15");
console.log("Specific date:", specificDate);

let dateWithParams = new Date(2024, 0, 15, 10, 30, 0); // Year, Month (0-11), Day, Hour, Minute, Second
console.log("Date with parameters:", dateWithParams);

let fromTimestamp = new Date(1700000000000);
console.log("From timestamp:", fromTimestamp);

// GET METHODS
let date = new Date();
console.log("getFullYear():", date.getFullYear());
console.log("getMonth():", date.getMonth()); // 0-11 (0 = January)
console.log("getDate():", date.getDate()); // Day of month (1-31)
console.log("getDay():", date.getDay()); // Day of week (0-6, 0 = Sunday)
console.log("getHours():", date.getHours());
console.log("getMinutes():", date.getMinutes());
console.log("getSeconds():", date.getSeconds());
console.log("getMilliseconds():", date.getMilliseconds());
console.log("getTime():", date.getTime()); // Timestamp

// UTC GET METHODS
console.log("getUTCFullYear():", date.getUTCFullYear());
console.log("getUTCMonth():", date.getUTCMonth());
console.log("getUTCDate():", date.getUTCDate());

// SET METHODS
let setDate = new Date();
setDate.setFullYear(2025);
console.log("After setFullYear(2025):", setDate);

setDate.setMonth(5); // June
console.log("After setMonth(5):", setDate);

setDate.setDate(20);
console.log("After setDate(20):", setDate);

setDate.setHours(15);
console.log("After setHours(15):", setDate);

// FORMATTING METHODS
console.log("toString():", date.toString());
console.log("toDateString():", date.toDateString());
console.log("toTimeString():", date.toTimeString());
console.log("toISOString():", date.toISOString());
console.log("toUTCString():", date.toUTCString());
console.log("toLocaleString():", date.toLocaleString());
console.log("toLocaleDateString():", date.toLocaleDateString());
console.log("toLocaleTimeString():", date.toLocaleTimeString());

// PARSE METHOD
let parsed = Date.parse("2024-03-15");
console.log("Date.parse('2024-03-15'):", parsed);

// NOW METHOD
let now = Date.now();
console.log("Date.now():", now);

// COMPARING DATES
let date1 = new Date("2024-01-01");
let date2 = new Date("2024-12-31");
console.log("date1 < date2:", date1 < date2);
console.log("date1 > date2:", date1 > date2);

// DATE DIFFERENCE
let diff = date2 - date1; // Difference in milliseconds
console.log("Difference in milliseconds:", diff);
console.log("Difference in days:", diff / (1000 * 60 * 60 * 24));
