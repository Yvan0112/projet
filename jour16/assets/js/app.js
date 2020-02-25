  // référence éléments du DOM
  const menu = document.querySelector("#menu");
  const sliderMenu = document.querySelector(".slide");
  
  // écouteur sur le click
  menu.addEventListener("click", function() {
    sliderMenu.classList.toggle("slide");
  });
  const form = document.getElementById("search-form");

form.addEventListener("submit", function(event) {
  // empêcher la soumission du formulaire lors de l'event submit
  event.preventDefault();

  const data = new FormData(form);

  //   const entries = data.entries();

  //   // Affichage des paires clefs/valeurs
  //   for (var entry of entries) {
  //     console.log(entry);
  //   }

  fetch("lib/process.php", {
    method: "POST",
    body: data
  })
    .then(function(response) {
      return response.json();
    })
    .then(function(payload) {
      console.log(payload);
    })
    .catch(function(error) {
      console.log(error);
    });
});