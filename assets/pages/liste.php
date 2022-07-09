<?php
include '../php/header.php';
?>
<title>Liste</title>
<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/page-css/map_list.css">

</head>

<body class="main_liste">
    <main>
        <div class="search_filter_bar">
            <div class="search_bar_link">
                <div class="search_bar">
                    <div class="icon_text">
                        <img src="../img/Vector.svg" alt="">
                        <input id="search_bar_list" type="text" placeholder="Votre recherche...">
                    </div>
                    <img src="../img/mic.svg" alt="">
                </div>
                <div class="map_switch_list">
                    <a href="map.php">Carte</a>
                </div>
            </div>
            <div id="filter_bar_list" class="filter_bar_list">
                <div class="filter_list"><img src="../img/hotel.png" alt=""></div>
                <div class="filter_list"><img src="../img/restaurant.png" alt=""></div>
                <div class="filter_list"><img src="../img/shopping.png" alt=""></div>
                <div class="filter_list"><img src="../img/station.png" alt=""></div>
                <div class="filter_list"><img src="../img/pharmacie.png" alt=""></div>
            </div>
        </div>
        <div id="all_result_liste" class="all_result_liste">
            <?php
            require '../database/pdo.php';
            $inserte = $pdo->prepare('SELECT * FROM shop');
            $inserte->execute();
            $shop = $inserte->fetchAll(PDO::FETCH_ASSOC);

            foreach($shop as $shop) {

                // s pour shop
                $sid = $shop['shopId'];
                $sname = $shop['shopName'];
                $spic = $shop['shopPic'];
                $splace = $shop['shopAdress'];

                echo "<div class='result'>
                <div class='logo_recent'>
                    <img src='$spic' alt='$sname'>
                </div>
                <div class='texte'>
                    <div style='margin-bottom: 5px;'>$sname</div>
                    <button><a href=$splace>Aller voir</a></button>
                </div>
                </div>";
            }
        ?>
        </div>
        <div id="filter_commerce" class="filter_bar filter_commerce">
            <div class="filter">Ouvert actuellement</div>
            <div class="filter">Les mieux notés</div>
            <div class="filter">Les plus près</div>
            <div class="filter">Les plus côtés</div>
        </div>
        <div id="all_commerce" class="all_commerce">
            <div class="commerce">
                <div class="all_image_commerce">
                    <img class="image_commerce"
                        src="../img/closeup-of-two-women-wearing-facemasks-during-the-covid-19-pandemic-sitting-at-cafe.jpg"
                        alt="">
                    <img class="image_commerce" src="../img/colorful-paper-bags-placed-on-the-table.jpg" alt="">
                    <img class="image_commerce"
                        src="../img/interior-shot-of-cafe-with-chairs-near-the-bar-with-wooden-tables.jpg" alt="">
                </div>
                <div class="all_texte_commerce">
                    <span class="nom_commerce">Ibis Paris Vaugirard Porte de Versailles</span>
                    <span class="avis_commerce">4,5 <img src="../img/coeur.svg" alt=""> (132)</span>
                    <span class="type_commerce">Hôtel - 30 km</span>
                </div>
            </div>
            <div class="commerce">
                <div class="all_image_commerce">
                    <img class="image_commerce"
                        src="../img/closeup-of-two-women-wearing-facemasks-during-the-covid-19-pandemic-sitting-at-cafe.jpg"
                        alt="">
                    <img class="image_commerce" src="../img/colorful-paper-bags-placed-on-the-table.jpg" alt="">
                    <img class="image_commerce"
                        src="../img/interior-shot-of-cafe-with-chairs-near-the-bar-with-wooden-tables.jpg" alt="">
                </div>
                <div class="all_texte_commerce">
                    <span class="nom_commerce">Ibis Paris Vaugirard Porte de Versailles</span>
                    <span class="avis_commerce">4,5 <img src="../img/coeur.svg" alt=""> (132)</span>
                    <span class="type_commerce">Hôtel - 30 km</span>
                </div>
            </div>
            <div class="commerce">
                <div class="all_image_commerce">
                    <img class="image_commerce"
                        src="../img/closeup-of-two-women-wearing-facemasks-during-the-covid-19-pandemic-sitting-at-cafe.jpg"
                        alt="">
                    <img class="image_commerce" src="../img/colorful-paper-bags-placed-on-the-table.jpg" alt="">
                    <img class="image_commerce"
                        src="../img/interior-shot-of-cafe-with-chairs-near-the-bar-with-wooden-tables.jpg" alt="">
                </div>
                <div class="all_texte_commerce">
                    <span class="nom_commerce">Ibis Paris Vaugirard Porte de Versailles</span>
                    <span class="avis_commerce">4,5 <img src="../img/coeur.svg" alt=""> (132)</span>
                    <span class="type_commerce">Hôtel - 30 km</span>
                </div>
            </div>
        </div>
    </main>



    <?php 
    require "footer.php"
    ?>



    <script src="js/map_list.js"></script>
    <script>
    const search_bar_list = document.querySelector('#search_bar_list')
    search_bar_list.addEventListener('change', (e) => {
        if (e.target.value == "") {
            document.querySelector('#filter_bar_list').style.display = "flex";
            document.querySelector('#all_result_liste').style.display = "flex";
            document.querySelector('#filter_commerce').style.display = "none";
            document.querySelector('#all_commerce').style.display = "none";
        } else {
            document.querySelector('#filter_bar_list').style.display = "none";
            document.querySelector('#all_result_liste').style.display = "none";
            document.querySelector('#filter_commerce').style.display = "flex";
            document.querySelector('#all_commerce').style.display = "block";
        }
    });
    </script>
</body>

</html>