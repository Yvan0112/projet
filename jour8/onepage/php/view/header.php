<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manchester united</title>
    <style>
section {
    width:100%;
    min-height:100vh; /* vh HAUTEUR DE L'ECRAN 100vh => 100% */
    padding-top: 80px;
    background-color: #cccccc;
    }
header {
    position:fixed; /* NE PAS OUBLIER LES COORDONNEES top ET left */
    top:0;
    left:0;
    padding:8px;
    opacity:1;
    transition: all 0.5s linear;
    } 
h1{ 
    color:red;
}
header h1 {
    margin:0;
    padding: 0 10px;
    font-size:1.2rem;
}
header{
    display:flex;
}
.container img {
    margin:10px;
    max-width:100%;
    width: calc(100% / 3 - 20px);  /* PRATIQUE POUR LES DIVISIONS AVEC VIRGULE */
    object-fit: cover;
    height:200px;
}
</style>
    </head>
<body class="<?php echo $classeBody ?? "" ?>">
    <header>
        <h1><?php echo $titrePage ?? "Manchester United" ?></h1>
        <nav>
            <!-- POUR ALLER SUR UNE ANCRE ON UTILISE LE SELECTEUR # -->
            <a href="#s1">expériences</a>
            <a href="#s2">compositions</a>
        </nav>
    </header>
    <main id="haut">