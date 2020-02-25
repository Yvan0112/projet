<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jour 16 AJAX</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <h1>YVAN AJAX</h1> 
        <nav class=slide>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="services.php">services</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>
        <div id="menu">Menu</div>
        <section>
    <h2>ACCUEIL</h2>
    <p>Welcome,bienvenue,Bienvenido,Karibuni
       to YVAN'S WORLD
       
    </p>
    
</section>
<div>
        <form id="search-form" action="" method="post">
            <input type="text" name="username" id="username" placeholder="Your user name">
            <input type="email" name="email" id="email" placeholder="Your email">
            <input type="password" name="password" id="password">
            <button type="submit">Register</button>
        </form>
    </div>
    <div id="countries"></div>
    <!-- <hr>
    <button id="list-users">List all users</button>
    <hr>
    <div id="users-list"></div> -->


    <script src="assets/js/app.js"></script>
</body>
</html>