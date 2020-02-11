<section id="s1">
        <h2>Expériences</h2>
        <p>The Red Devils are one of the biggest clubs in the world, with some of the greatest players of all time pulling on the famed red shirt. Our must do tour for any United fan, gives them the opportunity to see behind the scenes in the ‘Theatre of Dreams’ and entry to the museum to see the walls of silverware.

With experiences designed for one person, two people or even families you’ll be able to treat all your 'United'-mad friends and loved ones, as well as yourself.  </p>
    <div class=container>
<?php
$tableau=["manutd1","manutd2","manutd3","manutd4"];
$tableauAlt=["photo1","photo2","photo3","photo4"];
for($i=0; $i < count($tableau); $i++)
{
    echo
<<<CODEHTML
            <img src="assets/img/$tableau[$i].jpg" alt="$tableauAlt[$i]">
 
CODEHTML;    
}
    /* codehtml
        <img src="assets/img/manutd1.jpg" alt="photo1">
        <img src="assets/img/manutd2.jpg" alt="photo2">
        <img src="assets/img/manutd3.jpg" alt="photo3">
        <img src="assets/img/manutd4.jpg" alt="photo4">
        */
?>
</section>
<section id="s2">
        <h2>Compositions</h2>
        <p>Voice quelques joueurs qui composent l'équpe de Manchedter Utd </p>
    <div class=container>
        <img src="assets/img/marcus.jpg" alt="photo5">
        <img src="assets/img/martial.jpg" alt="photo6">
        <img src="assets/img/jl.jpg" alt="photo7">
        <img src="assets/img/degea.jpg" alt="photo8">
    </div>

</section>