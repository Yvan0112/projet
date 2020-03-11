<?php
function Renvoyerpluspetitentre3Nb($nombre1,$nombre2,$nombre3)
{ 
    if(($nombre1<$nombre2) && ($nombre1<$nombre3))
    {
        return $nombre1;
    }
    else if (($nombre2<$nombre1) &&($nombre2<$nombre3))
    {
        return $nombre2;
    }
    else
    { 
        return $nombre3;
    }
}
$pluspetitentre3Nb= Renvoyerpluspetitentre3Nb(76,150,45);
echo "<h1>le plus petit des trois nombres est $pluspetitentre3Nb</h1>";
?>