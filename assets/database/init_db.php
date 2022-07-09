<?php
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "db_upark";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;", $username, $password);

$maRequete = $pdo->prepare("CREATE DATABASE IF NOT EXISTS `db_upark`
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
$maRequete->execute();
$maRequete->closeCursor();

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);

$maRequete = $pdo->prepare(

    "CREATE TABLE IF NOT EXISTS `user` (
        `userId` INT NOT NULL AUTO_INCREMENT,
        `userMail` VARCHAR(255) NOT NULL,
        `userPwd` VARCHAR(255) NOT NULL,
        `userName` VARCHAR(255) NOT NULL,
        `userSurname` VARCHAR(255),
        `userPic` VARCHAR(255),
        `userPoint` VARCHAR(255),
        PRIMARY KEY (`userId`)
        ) ENGINE=InnoDB;

    CREATE TABLE IF NOT EXISTS `shop`(
        `shopId`  INT NOT NULL AUTO_INCREMENT,
        `shopName`  VARCHAR(255) NOT NULL,
        `shopAdress`  VARCHAR(255) NOT NULL,
        `shopPic` VARCHAR(255) NOT NULL,
        `shopStatus` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`shopId`)
        ) ENGINE=InnoDB;
        INSERT INTO `shop` (`shopName`, `shopAdress`, `shopPic`, `shopStatus`) VALUES
        ('Victoria Paris', 
        'https://www.google.com/maps/place/Victoria+Paris/@48.8739747,2.2931004,15z/data=!4m5!3m4!1s0x0:0x3b5d18768be1fe07!8m2!3d48.8739747!4d2.2931004', 
        'https://lh5.googleusercontent.com/p/AF1QipP9nUPSiXUu9RIL7Z6gUJyreCV4tpJojp6FXo9P=w408-h272-k-no',
        'fermé'),

        ('Bouillon Chartier',
        'https://www.google.com/maps/place/Bouillon+Chartier/@48.8719333,2.3430535,15z/data=!4m5!3m4!1s0x0:0xf5848e4836f69968!8m2!3d48.8719323!4d2.3430617',
        'https://lh5.googleusercontent.com/p/AF1QipM8ISv7F0APMUEjBuqZ2jtzBGgGGc77H5smdYW1=w408-h271-k-no',
        'fermé'),

        ('Café Sud', 
        'https://www.google.com/maps/place/Caf%C3%A9+Sud+%7C+Restaurant+Fran%C3%A7ais+Bistronomique/@48.8725798,2.3245716,15z/data=!4m2!3m1!1s0x0:0xedb1d17c8429fc19?sa=X&ved=2ahUKEwjpqpqenOr4AhVLrxoKHThlCcwQ_BJ6BAhdEAU',
        'https://lh5.googleusercontent.com/p/AF1QipPfBy2_jvcBe6z90uFxjvGapxve4XZDk57IBdh_=w408-h274-k-no',
        'fermé'),

        ('La Table de Colette', 
        'https://www.google.com/maps/place/La+Table+de+Colette/@48.8473045,2.3472188,15z/data=!4m5!3m4!1s0x0:0x3882a53dca4c3d69!8m2!3d48.8473045!4d2.3472188',
        'https://lh5.googleusercontent.com/p/AF1QipN266e5O9xbfR0gs1jPqkVzTLlowSBRoOyWK8p0=w408-h270-k-no',
        'fermé'),
        
        ('BonneGueule', 
        'https://www.google.com/maps/place/BonneGueule+%7C+Marque+de+v%C3%AAtements/@48.862185,2.365939,15z/data=!4m2!3m1!1s0x0:0xc7f95344a161892f?sa=X&ved=2ahUKEwj_jqf6nOr4AhVJ4oUKHaRoAfgQ_BJ6BAhIEAU',
        'https://lh5.googleusercontent.com/p/AF1QipOJKRWkQduFbsMZNaterfZPtLqAA13FUrn7KIso=w408-h374-k-no',
        'fermé'),
        
        ('Mes Demoiselles Paris', 
        'https://www.google.com/maps/place/Mes+Demoiselles...+Paris/@48.8631982,2.3606038,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e0688d9a8a5:0x8cabff7cfff97a6f!8m2!3d48.8631982!4d2.3627925',
        'https://lh5.googleusercontent.com/p/AF1QipOW5FU5oputFDvd5LyDvofzRgQ2tIKWASl9NZXl=w408-h293-k-no',
        'fermé'),

        ('Héroïnes Marais', 
        'https://www.google.com/maps/place/H%C3%A9ro%C3%AFnes+Marais/@48.8568278,2.3602964,15z/data=!4m2!3m1!1s0x0:0x3f406a063ad29a5f?sa=X&ved=2ahUKEwiIkNeiner4AhXHgc4BHeZFAxUQ_BJ6BAhSEAU',
        'https://lh5.googleusercontent.com/p/AF1QipMpUc4gycq0DQ7EyXOjBJzfGS38YXYoa-IfuVQS=w408-h544-k-no',
        'fermé'),

        ('Kiliwatch Paris', 
        'https://www.google.com/maps/place/Kiliwatch+Paris/@48.8648522,2.3456871,15z/data=!4m5!3m4!1s0x0:0x8e2256427110566e!8m2!3d48.8648522!4d2.3456871',
        'https://lh5.googleusercontent.com/p/AF1QipOYXFyXoeFqPHlICtZYhp7435urwoDW6FoE2lqZ=w408-h306-k-no',
        'fermé'),

        ('Hôtel Prince Monceau', 
        'https://www.google.com/maps/place/H%C3%B4tel+Prince+Monceau/@48.886775,2.313752,15z/data=!4m8!3m7!1s0x0:0x81905dd85550fea6!5m2!4m1!1i2!8m2!3d48.886807!4d2.3138007',
        'https://lh5.googleusercontent.com/p/AF1QipOdYtozqbFbltjXJyFVoMF2WHgNbjV6wNucn5s7=w410-h240-k-no',
        'fermé'),

        ('Les Plumes Hôtel', 
        'https://www.google.com/maps/place/Les+Plumes+H%C3%B4tel/@48.8766667,2.3433333,15z/data=!4m8!3m7!1s0x0:0x6515f13bff59b1a1!5m2!4m1!1i2!8m2!3d48.8766221!4d2.3433298',
        'https://lh5.googleusercontent.com/p/AF1QipOvPvMt7SV1Lsjyl5y3qkEKjUeSMNEVgz6m5u7A=w408-h271-k-no',
        'fermé')"
    
    

);
$maRequete->execute();
$maRequete->closeCursor();


echo "ça marche";
?>