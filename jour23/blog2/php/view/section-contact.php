<section id="section-contact">
            <h2>Contactez-nous</h2>
            <p>Pour nous contacter, indentifiez-vous avec votre nom,votre email et envoyez-nous votre message!!
            nous ne manquerons pas de revenir vers vous!! ;)</p>
            <!-- method GET ou POST -->
            <form action="#section-contact" method="POST">
                
                <input type="text" name="nom" required placeholder="entrez votre nom">
                <input type="email" name="email" required placeholder="entrez votre email">
                <textarea name="message" cols="60" rows="6" required placeholder="entrez votre message"></textarea>
                <button type="submit">envoyer votre message</button>

                <div class="confirmation">
                
<?php

if (count($_REQUEST) > 0)
{

    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];

    echo "merci de votre message $nom ($email)";

    $requeteSQL =
<<<CODESQL

INSERT INTO contact 
(nom, email, message) 
VALUES 
('$nom', '$email', '$message');

CODESQL;

    $pdo = new PDO("mysql:dbname=vitrine;host=localhost;charset=utf8;", "root", "" );
    $pdo->exec($requeteSQL);

}

?>
    </div>
    </form>
          

</section>