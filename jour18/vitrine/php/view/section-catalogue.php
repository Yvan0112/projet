<section>
            <h2>catalogue</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias eos qui ratione dolorum ut corporis repudiandae rerum expedita harum nobis ad voluptatibus, obcaecati sequi. Dolore hic distinctio eveniet molestiae incidunt!</p>
            <!-- JE RAJOUTE UNE CLASSE POUR POUVOIR FACILEMENT SELECTIONNER LA BALISE EN JS -->
            <img class="imagePrincipale" src="assets/img/car1.jpg" alt="voiture">
            <div class="container">
<?php

$listeGalerie = glob("assets/img/car*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>            
            </div>
        </section>
