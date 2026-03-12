// NUMBER METHODS WITH CONSOLE

let num1 = 42;
let num2 = 3.14;
let num3 = -10;
let num4 = 1.5e6;
let num5 = 0b1010;
let num6 = 0xff;
let num7 = 0o77;

console.log(num1);
console.log(num2);
console.log(num3);
console.log(num4);
console.log(num5);
console.log(num6);
console.log(num7);

// NUMBER PROPERTIES
console.log(Number.MAX_VALUE);
console.log(Number.MIN_VALUE);
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MIN_SAFE_INTEGER);
console.log(Number.EPSILON);
console.log(Number.POSITIVE_INFINITY);
console.log(Number.NEGATIVE_INFINITY);
console.log(Number.NaN);

// CONVERTING TO NUMBERS
console.log(Number("123"));
console.log(Number("12.34"));
console.log(Number("123abc"));
console.log(parseInt("123"));
console.log(parseInt("123.45"));
console.log(parseInt("123abc"));
console.log(parseInt("abc123"));
console.log(parseFloat("123.45"));
console.log(parseFloat("123.45abc"));
console.log(+"123");

// CHECKING NUMBERS
let nan = NaN;
let inf = Infinity;
console.log(isNaN(nan));
console.log(isNaN(123));
console.log(Number.isNaN(nan));
console.log(isFinite(123));
console.log(isFinite(inf));
console.log(Number.isFinite(123));
console.log(Number.isInteger(123));
console.log(Number.isInteger(123.45));
console.log(Number.isSafeInteger(123));
console.log(Number.isSafeInteger(9999999999999999));

// ROUNDING METHODS
let pi = 3.14159;
console.log(pi.toFixed(2));
console.log(pi.toFixed(4));
console.log(pi.toPrecision(3));
console.log(pi.toPrecision(5));
console.log(pi.toExponential(2));

// NUMBER FORMATTING
let bigNum = 1234567.89;
console.log(bigNum.toLocaleString("en-US"));
console.log(bigNum.toLocaleString("de-DE"));
