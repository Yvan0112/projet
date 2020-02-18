window.open("*.php","PopUp",
"width=500,height=350,location=no,status=no,toolbar=no,scrollbars=no");


  // référence éléments du DOM
const menu = document.querySelector("#menu");
const sliderMenu = document.querySelector(".slide");

// écouteur sur le click
menu.addEventListener("click", function() {
  sliderMenu.classList.toggle("slide");
});
