<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jour 16 AJAX</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>YVAN AJAX</h1>
        <nav class=slide>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="services.php">services</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>
        <div id="menu">Menu</div>
    </header>

     <section>
    <h2>CONTACT</h2>
    
    <form id="contact" action="#contact" method="POST">
        <input type="text" name="nom" placeholder="entrez votre nom">
        <input type="email" name="email" placeholder="entrez votre email">
        <textarea name="message" cols="80" rows="8" placeholder="entrez votre message"></textarea>
        <button type="submit">envoyer votre message</button>
    </form>
     </section>
     <script src="assets/js/app.js"></script>
     </body>
</html>