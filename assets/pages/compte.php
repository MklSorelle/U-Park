<?php
include '../php/header.php';
?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/page-css/compte.css">

    <title>compte</title>
</head>
<body>
    <!-- compte -->
    <div class="compte">
    <!-- contenus  -->
        <div class="contener_settings">
            <div class="title">Compte</div>
            <div class="utilisateur">
                <img src="../img/Group.svg" alt="image de profil">
                <div>
                    <div>
                        Prenom
                    </div>
                    <div>
                        Nom                 
                    </div>
                </div>
                <div>
                    <img src="../img/Vector.svg" alt="image pour la suite"> 
                </div>
            </div>  
            <div class="setting">
                <div class="items_settings">
                    <div>Inscription</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Nombre de points</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Sécurité et identifiants de connexion</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Notifications</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Autorisations pour réseaux sociaux</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Gestion de compte</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Information personnelles</div>
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting" id="margin_setting">
                <div class="items_settings">
                    <form action="../php/deconnexion.php">
                        <input type="submit" value="se déconnecter">
                    </form>
                    
                    <img src="../img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
        </div>
    </div>  
    <!-- nav -->
    <?php 
        include_once('footer.php')
    ?>
</body>
</html>