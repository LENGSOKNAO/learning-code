// Mouse down / up

let button2 = document.getElementById("myButton2");
let output3 = document.getElementById("output3");

button2.addEventListener("mousedown", function () {
  output3.innerHTML = "Status: Mouse DOWN on button2";
  this.innerHTML = "Releasing...";
});

button2.addEventListener("mouseup", function () {
  output3.innerHTML = "Status: Mouse UP on button";
  this.innerHTML = "Press and release me";
});

let mouseBtn = document.getElementById("mouseBtn");
let mouseOutput = document.getElementById("mouseOutput");

// Mouse enter / leave
let hoverOutput = document.getElementById("hoverOutput");

mouseBtn.addEventListener("mouseenter", function () {
  hoverOutput.innerHTML = "Event: mouseenter";
  this.style.backgroundColor = "orange";
});

mouseBtn.addEventListener("mouseleave", function () {
  hoverOutput.innerHTML = "Event: mouseleave";
  this.style.backgroundColor = "lightblue";
});

// Mouse move
let moveDiv = document.getElementById("moveDiv");
let moveOutput = document.getElementById("moveOutput");

moveDiv.addEventListener("mousemove", function (event) {
  moveOutput.innerHTML =
    "Event: mousemove - X:" + event.offsetX + " Y:" + event.offsetY;
});

// Right click
document
  .getElementById("rightClickBtn")
  .addEventListener("contextmenu", function (event) {
    event.preventDefault();
    document.getElementById("rightClickOutput").innerHTML =
      "Event: contextmenu (right click)";
  });

// Scroll
document.getElementById("scrollDiv").addEventListener("wheel", function () {
  document.getElementById("scrollOutput").innerHTML = "Event: wheel (scroll)";
});
