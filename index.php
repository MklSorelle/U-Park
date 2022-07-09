<?php
include './assets/php/header.php';
?>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/page-css/inscription.css">
    <title>U-Park</title>
</head>




<body>
    <div class="contener">
        <div class="login">
            <p class="title">Connexion</p>
            <form method="post" action="./assets/php/connexion-recep.php">
                <input type="email" placeholder="Adresse e-mail">
                <input type="password" placeholder="Mot de passe">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <input class="go-sign-in" type="button" value="Inscription">
        </div>
        <div class="sign-in">
            <p class="title">Inscription</p>
                <form method="post" action="./assets/php/inscription-recep.php">
                    <input type="text" name="name" placeholder="Nom de famille">
                    <input type="text" name="surname" placeholder="Prénom">
                    <input type="email" name="email" placeholder="Adresse e-mail ">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="password" name="confirm-password" placeholder="Confirmez le mot de passe">
                    <input class="connexion" type="submit" value="Inscription">
                </form>
                <input class="go-login"  type="button" value="Connexion">
        </div>
    </div>


<script src="./assets/js/change-state.js"></script>
</body>
</html>