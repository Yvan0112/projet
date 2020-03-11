<?php
function Renvoyerpluspetitentre2Nb($nombre1,$nombre2)
{
    if ($nombre1<$nombre2)
    {
        return $nombre1;
    }
    else
    {
        return $nombre2;
    }

}
$pluspetit= Renvoyerpluspetitentre2Nb(7,3);

echo "<h1>le plus petit est $pluspetit </h1>";
?>