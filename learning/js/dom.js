// DOM MANIPULATION WITH CONSOLE
// Run this in your browser's developer console

// SELECTING ELEMENTS
let header = document.getElementById("header");
console.log("getElementById('header'):", header);

let items = document.getElementsByClassName("item");
console.log("getElementsByClassName('item'):", items);

let paragraphs = document.getElementsByTagName("p");
console.log("getElementsByTagName('p'):", paragraphs);

let firstButton = document.querySelector(".btn");
console.log("querySelector('.btn'):", firstButton);

let allButtons = document.querySelectorAll(".btn");
console.log("querySelectorAll('.btn'):", allButtons);

// CREATING ELEMENTS
let newDiv = document.createElement("div");
console.log("createElement('div'):", newDiv);

let textNode = document.createTextNode("Hello World");
console.log("createTextNode:", textNode);

let comment = document.createComment("This is a comment");
console.log("createComment:", comment);

// MODIFYING CONTENT
let div = document.createElement("div");
div.innerHTML = "<p>Hello</p>";
console.log("innerHTML:", div);

div.textContent = "Plain text";
console.log("textContent:", div);

div.innerText = "More text";
console.log("innerText:", div);

// ATTRIBUTES
div.setAttribute("id", "myDiv");
div.setAttribute("class", "container");
console.log("After setAttribute:", div);

console.log("getAttribute('id'):", div.getAttribute("id"));

div.removeAttribute("class");
console.log("After removeAttribute('class'):", div);

console.log("hasAttribute('id'):", div.hasAttribute("id"));

// CLASSES
div.classList.add("box", "highlight");
console.log("After classList.add:", div);

div.classList.remove("highlight");
console.log("After classList.remove:", div);

div.classList.toggle("active");
console.log("After classList.toggle('active'):", div);

console.log("classList.contains('box'):", div.classList.contains("box"));

// STYLES
div.style.color = "red";
div.style.backgroundColor = "black";
div.style.fontSize = "20px";
div.style.padding = "10px";
div.style.margin = "5px";
div.style.border = "1px solid blue";
console.log("After setting styles:", div.style);

console.log("style.color:", div.style.color);
console.log("style.backgroundColor:", div.style.backgroundColor);

// APPENDING AND REMOVING
let parent = document.createElement("div");
let child = document.createElement("span");
parent.appendChild(child);
console.log("After appendChild:", parent);

let newChild = document.createElement("p");
parent.insertBefore(newChild, child);
console.log("After insertBefore:", parent);

parent.removeChild(child);
console.log("After removeChild:", parent);

let temp = document.createElement("div");
temp.remove();
console.log("After remove():", temp);

// TRAVERSING
let container = document.createElement("div");
container.innerHTML = `
    <div class="parent">
        <div class="child1">First</div>
        <div class="child2">Second</div>
        <div class="child3">Third</div>
    </div>
`;

let parentElement = container.firstElementChild;
console.log("parentElement:", parentElement);
console.log("children:", parentElement.children);
console.log("firstElementChild:", parentElement.firstElementChild);
console.log("lastElementChild:", parentElement.lastElementChild);
console.log(
  "nextElementSibling:",
  parentElement.firstElementChild.nextElementSibling,
);
console.log(
  "previousElementSibling:",
  parentElement.lastElementChild.previousElementSibling,
);
console.log("parentNode:", parentElement.firstElementChild.parentNode);

// CLONING NODES
let original = document.createElement("div");
original.textContent = "Original";
original.classList.add("original");

let shallowCopy = original.cloneNode(false);
console.log("shallow clone:", shallowCopy);

let deepCopy = original.cloneNode(true);
console.log("deep clone:", deepCopy);

// CHECKING NODE TYPES
console.log("=== NODE PROPERTIES ===");

let testElement = document.createElement("p");
testElement.textContent = "Test";
testElement.id = "test";

console.log("nodeType:", testElement.nodeType);
console.log("nodeName:", testElement.nodeName);
console.log("tagName:", testElement.tagName);
console.log("id:", testElement.id);
console.log("className:", testElement.className);
console.log("textContent:", testElement.textContent);

// PRACTICAL EXAMPLES

// Example 1: Create a list
let list = document.createElement("ul");
list.style.listStyle = "none";
list.style.padding = "0";

for (let i = 1; i <= 3; i++) {
  let item = document.createElement("li");
  item.textContent = "Item " + i;
  item.style.padding = "5px";
  item.style.margin = "2px";
  item.style.backgroundColor = i === 2 ? "#f0f0f0" : "white";
  list.appendChild(item);
}
console.log("Created list:", list);

// Example 2: Create a styled card
let card = document.createElement("div");
card.style.border = "1px solid #ccc";
card.style.padding = "15px";
card.style.margin = "10px";
card.style.borderRadius = "8px";
card.style.boxShadow = "2px 2px 5px rgba(0,0,0,0.1)";
card.style.maxWidth = "300px";

let title = document.createElement("h3");
title.textContent = "Card Title";
title.style.margin = "0 0 10px 0";
title.style.color = "#333";

let content = document.createElement("p");
content.textContent = "This is card content";
content.style.margin = "0";
content.style.color = "#666";

card.appendChild(title);
card.appendChild(content);
console.log("Created card:", card);

// Example 3: Create a table
let table = document.createElement("table");
table.style.borderCollapse = "collapse";
table.style.width = "100%";
table.style.border = "1px solid #ccc";

for (let r = 1; r <= 3; r++) {
  let row = document.createElement("tr");
  for (let c = 1; c <= 3; c++) {
    let cell = document.createElement(r === 1 ? "th" : "td");
    cell.textContent = `Row ${r} Col ${c}`;
    cell.style.border = "1px solid #ccc";
    cell.style.padding = "8px";
    if (r === 1) {
      cell.style.backgroundColor = "#f0f0f0";
    }
    row.appendChild(cell);
  }
  table.appendChild(row);
}
console.log("Created table:", table);

// Example 4: Create navigation menu
let nav = document.createElement("nav");
nav.style.backgroundColor = "#333";
nav.style.padding = "10px";

let menuItems = ["Home", "About", "Services", "Contact"];
menuItems.forEach((text) => {
  let link = document.createElement("a");
  link.textContent = text;
  link.style.color = "white";
  link.style.padding = "10px";
  link.style.textDecoration = "none";
  link.style.marginRight = "5px";
  nav.appendChild(link);
});
console.log("Created navigation:", nav);
