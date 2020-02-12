<?php
$nom        = $_REQUEST["nom"];
$email      = $_REQUEST["email"];
$message    = $_REQUEST["message"];

echo "merci pour votre message $nom ($email). Nous vous recontacterons dans les meilleurs délais.";


$messageStocke =
<<<texte
nom: $nom
email: $email
message:
$message
texte;
file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);
?>