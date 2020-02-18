window.open("index.php","PopUp",
"width=500,height=350,location=no,status=no,toolbar=no,scrollbars=no");

function display() {
    console.log("Document cliqué");
  }
  
  window.addEventListener("click", display);
  
  let lien = document.querySelector("#lien");
  let modal = document.querySelector("#modal");
  
  window.addEventListener("mouseout", function() {
    modal.style.display = "block";

  });
  