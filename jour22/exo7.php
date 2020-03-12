<?php
 
 function RenvoyerNbpairs($tabnombre)
 {
     $Nbpairs=0;
     for($i=0;$i<count($tabnombre);$i++)
     {
         if($tabnombre[$i]%2==0)
         {
             $Nbpairs=$Nbpairs+1;
         }
     }
     return $Nbpairs;


 }

 $Nbpairs= RenvoyerNbpairs([1,4,6,8]);
 echo "<h1>les nombres pairs sont $Nbpairs</h1>";