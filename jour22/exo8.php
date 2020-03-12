<?php

function concatenertexte($tablettre)
{ 
    $tableau="";
    foreach ($tablettre as $items=> $lettre)
    { 
        if ($items >0)
        {
            $tableau ="$tableau,"."$lettre";
        }
        else
        {
            $tableau ="$tableau"."$lettre";
        }
    }
    return $tableau;


}
$concatener = concatenertexte(['a','b','c','d']);
echo "<h1>la concatenation est $concatener</h1>";
 
