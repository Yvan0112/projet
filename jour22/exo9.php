<?php

function calculerPrixTotal($tabQuantite,$tabPrixUnitaire)

for( $indice=0; $indice<count($tabPrixUnitaire);$indice++)
{
    $prixunitaire= $tabPrixUnitaire[$indice];
    $quantite = $tabQuantite[$indice];
    $soustotal = $prixunitaire*$quantite;
    $total = $total + $soustotal;
}
 return $total;