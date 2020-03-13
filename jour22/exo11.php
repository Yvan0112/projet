<?php

function creerInsertSQL($nomTable,$tabAssoColVal)
{
$liste1 = "";
$liste2 = "";
$indice = 0;

foreach($tabAssoColVal as $cle =>$valeur)
{
    if ($indice==0)
    {
        $liste1 = $liste1 . $cle;
        $liste2 = $liste2 . ":" . $cle;
    }
    else
    {
        $liste1 = $liste1 . "," .$cle;
        $liste2 = $liste2 . ", :". $cle;
    }
    $indice++;

}
$resultat = 
<<<CODESQL

INSERT INTO $nomTable
( $liste1 )
VALUES
( $liste2 )

CODESQL;

return $resultat;

}

$requeteSQLPreparee = creerInsertSQL("newsletter", [ "nom" => "julie", "email" => "julie@nomail.me" ]);

echo" <pre> $requeteSQLPreparee</pre>";