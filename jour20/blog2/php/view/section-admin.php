<section>
    <h2>FORMULAIRE DE CREATION D'ARTICLE</h2>
    <form class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="entrez la catégorie">
        <button type="submit">PUBLIER L'ARTICLE</button>
        <div class="confirmation">
<?php
// TRAITEMENT DU FORMULAIRE DE CREATION D'ARTICLE
if (count($_REQUEST) > 0)
{
    // ETAPE1: RECUPERER LES INFOS DU FORMULAIRE
    $titre           = $_REQUEST["titre"];
    $contenu         = $_REQUEST["contenu"];
    $image           = $_REQUEST["image"];
    $datePublication = $_REQUEST["datePublication"];
    $categorie       = $_REQUEST["categorie"];

    // ETAPE2: ON VA CONSTRUIRE LA REQUETE SQL INSERT
    $requeteSQL   =
<<<CODESQL

INSERT INTO blog2
( titre, contenu, image, datePublication, categorie)
VALUES
( '$titre', '$contenu', '$image', '$datePublication', '$categorie') 

CODESQL;
$tabAssoColonneValeur = [
    "titre"            => $_REQUEST["titre"],
    "contenu"          => $_REQUEST["contenu"],
    "image"            => $_REQUEST["image"],
    "datePublication"  => $_REQUEST["datePublication"],
    "categorie"        => $_REQUEST["categorie"],
];

$pdo = new PDO("mysql:host=localhost;dbname=blog2;charset=utf8;", "root", "");

// ETAPE2a: ON ENVOIE LA REQUETE PREPAREE
$pdoStatement = $pdo->prepare($requeteSQL);
$pdoStatement->execute($tabAssoColonneValeur);



    // MESSAGE DE CONFRFIRMATION
    echo "VOTRE ARTICLE A ETE PUBLIE";
}

?>
        </div>
    </form>
</section>