// Get the big image element
let grootPlaatje = document.getElementById("bigImage");

// Get all the tiny images
let klein = document.getElementsByClassName("tiniestImages");

// Loop through each tiny image and add a click event listener
for (let i = 0; i < klein.length; i++) {
    klein[i].addEventListener("click", function () {
        // Change the source of the big image to the clicked tiny image's source
        grootPlaatje.src = klein[i].src;
    });
}
