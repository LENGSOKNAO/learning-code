let output = document.getElementById("output");
let count = 0;

document.getElementById("clickMe").addEventListener("click", function () {
  count++;
  output.innerHTML = "Button clicked " + count + " time(s)";
  output.style.backgroundColor = "#d4edda";
});

document.getElementById("resetBtn").addEventListener("click", function () {
  count = 0;
  output.innerHTML = "Counter reset";
  output.style.backgroundColor = "#f0f0f0";
});

let button = document.getElementById("myButton");
let output1 = document.getElementById("output1");
let count1 = 0;

button.addEventListener("dblclick", function () {
  count1++;
  output1.innerHTML = "Button double-clicked " + count1 + " times";
});
