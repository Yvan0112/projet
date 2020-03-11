<?php
 function calculerPrixTTC($prixHT,$tva)
 {
     $PrixTTC= $prixHT+($prixHT*$tva/100);
     return $PrixTTC;

 }
 $PrixTTC= calculerPrixTTC(150,30);
 echo "<h1>le prix TTC est $PrixTTC";