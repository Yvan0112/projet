<section>
            <h2>liste des articles</h2>
            <div class="listeArticle">
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");
$requeteSQL =
<<<CODESQL

SELECT * FROM `blog`
ORDER BY datePublication DESC

CODESQL;


$pdoStatement = $pdo->query($requeteSQL);
$tabLigne = $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{
    $id         = $tabAsso["id"];
    $titre      = $tabAsso["titre"];
    $contenu    = $tabAsso["contenu"];
    $image      = $tabAsso["image"];
    $categorie  = $tabAsso["categorie"];



    echo
<<<CODEHTML

    <article class="$categorie">
        <img src="$image" alt="photo1">
        <h3>$titre</h3>
        <p>$contenu</p>
    </article>

CODEHTML;
}
?>
</section>