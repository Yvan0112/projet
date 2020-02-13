<?php

    require_once 'php/model/glossaire.php';

    // print_r($glossaire);
    function displayRandomTerm($array){
        $length=count($array);
        // utilisation de la fonction en php mt_rand() por générer un nombre aléatoire
        $index = mt_rand(0,$length-1);
        // var_dump($index);
       // echo '<pre>';
        // print_r($array[$index]['title']);
        // echo '<br>';
        // print_r($array[$index]['description']);
        // echo '</pre>';

        $title = $array[$index]['title'];
        $description = $array[$index]['description'];

        $html =
<<<OUTPUT
        <div>
            <h1>Le terme est : {$title}</h1>
            <p>La définition est : {$description}</p>
        </div>
OUTPUT;

        echo $html;
    }

    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
  <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">chenger de terme</button>
    </form>
  </div>
</nav>

    <?php
        displayRandomTerm($glossaire);
    ?>
</body>
</html>