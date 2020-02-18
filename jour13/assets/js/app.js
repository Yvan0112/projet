// console.log("Better be sleeping !");

// declaration de variable et affectation de valeur
let day;

day = "jour 13";

console.log(day);

// on peut réaffecter une valeur à une variable
day = "jour 14";

console.log(day);

// déclaration de constante
const organisme = "Simplon";

console.log(organisme);

// va provoquer une erreur car on ne peut pas réaffecter une valeur à une constante
// organisme = "Afpa";

// conditions
let taille = 200;

// if (taille >= 190) {
//   console.log("Trop grand !");
// } else if (taille >= 120) {
//   console.log("Amuse toi !");
// } else {
//   console.log("Trop petit !");
// }

switch (true) {
  case taille >= 190:
    console.log("Trop grand !");
    break;
  case taille >= 120:
    console.log("Amuse toi !");
    break;
  default:
    console.log("Trop petit !");
    break;
}

// les boucles
for (let i = 0; i < 10; i++) {
  console.log("On est à l'itération", i);
}

let tableau = [1, 2, 3, 4, 5];

// équivalent php
// $tableau = [1, 2, 3];

// foreach($tableau as $elem) {
//     echo $elem
// }

tableau.forEach(function(element) {
  console.log(element);
});

let i = 0;
while (i < 10) {
  console.log("On est à l'itération de la boucle while ", i);
  i++;
}

// les fonctions

// le DOM en JS
// const p = document.getElementsByTagName("p");
// console.log(p);

// const boxes = document.getElementsByClassName("box");
// console.log(boxes);

// const div = document.getElementById("div");
// console.log(div.innerHTML);

// div.innerHTML = "<h2>Texte qui remplace ma div d'origine</h2>";

const boxes = document.querySelectorAll("div.wrapper");
// console.log(boxes);

// for (let i = 0; i < boxes.length; i++) {
//   //   console.log(boxes[i]);
//   boxes[i].style.fontSize = "1.5rem";
//   boxes[i].style.color = "red";
// }

// récupérer le premier élément du tableau
boxes[0].style.color = "green";

const button = document.querySelector("button");

button.addEventListener("click", function() {
  boxes.forEach(function(elem) {
    elem.classList.toggle("hide");
  });
});
