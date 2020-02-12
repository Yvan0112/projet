<?php
$nbInfo = count($_REQUEST);
if ($nbInfo >= 2)
{
    $nom        = $_REQUEST["nom"] ?? "";
    $email      = $_REQUEST["email"] ?? "";
    $message    = $_REQUEST["message"] ?? "";
    $messageStocke =
<<<texte
    nom: $nom
    email: $email
    message: $message
texte;
    file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);
    if ($message != "")
    {
        echo "merci pour votre message $nom ($email). Nous vous recontacterons.";

    }
    else
    {
        echo "merci pour votre message $nom ($email) mais y'a R dans ton msg..عاهرة.";
       
    }
}
    ?>