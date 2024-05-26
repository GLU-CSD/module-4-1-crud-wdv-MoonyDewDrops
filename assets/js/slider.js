//This creates a variable for the slider, and the value it changes.  
var slider = document.getElementById("myRange");
var output = document.getElementById("prijs");

//What the text that displays the price displays. This sets it to the slider value 
output.innerHTML = slider.value;

//when it changes, the value (so also the text) changes
slider.oninput = function () {
  output.innerHTML = this.value;
}