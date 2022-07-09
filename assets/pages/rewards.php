<?php
include '../php/header.php';
?>
<title>Accueil</title>
<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/page-css/rewards.css">

</head>

<body>

    <?php
        require '../database/pdo.php';
        require '../php/data_user.php';

        $inserte = $pdo->prepare('SELECT userPoint FROM user WHEN userId = $userId');
        $inserte ->execute();
        $shop = $inserte->fetch();


    
    echo "<div id='head'>
        
        <div class='img'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='40' height='40'><path fill='none' d='M0 0h24v24H0z'/><path d='M16 17v-1h-3v-3h3v2h2v2h-1v2h-2v2h-2v-3h2v-1h1zm5 4h-4v-2h2v-2h2v4zM3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zM6 6h2v2H6V6zm0 10h2v2H6v-2zM16 6h2v2h-2V6z' fill='#FFFFFF'/></svg>        </div> 
        <div id='head_content'>
            <p>Récompenses</p>
            <p>12000</p>
            <p>points</p>
        </div>
    </div>";
    ?>

    <div id="ajd_container">
        <div id="ajd">
            <div class="texte">
                <p>Aujourd'hui</p>
                <p>+60 points</p>
            </div>
        </div>
    </div>



    <div id="award_container">
        <div id="content">

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 1</p>
                    <p>500 points</p>
                </div>
                <button class="CTA">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z "
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 2</p>
                    <p>750 points</p>
                </div>
                <button class="CTA">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 3</p>
                    <p>1000 points</p>
                </div>
                <button class="CTA">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 4</p>
                    <p>1250 points</p>
                </div>
                <button class="CTA_no">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 5</p>
                    <p>1500 points</p>
                </div>
                <button class="CTA_no">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 4</p>
                    <p>1750 points</p>
                </div>
                <button class="CTA_no">
                    <p>Obtenir</p>
                </button>
            </div>

            <div class="reward">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                            fill="#E0E0E0" />
                    </svg>
                </div>
                <div class="texte">
                    <p>Récompense 5</p>
                    <p>2000 points</p>
                </div>
                <button class="CTA_no">
                    <p>Obtenir</p>
                </button>
            </div>
        </div>




        <?php 
        include_once('footer.php')
    ?>



    </div>






</body>

</html>