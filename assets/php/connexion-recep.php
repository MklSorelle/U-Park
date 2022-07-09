
<?php 
    session_start(); // Démarrage de la session
    require '../database/pdo.php'; // On inclut la connexion à la base de données
    var_dump("teste unitaaaaaire");

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $pdo->prepare('SELECT userMail, userPwd, userId  FROM user WHERE userMail = :email');
        $check->execute(array(':email' => $email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['userPwd']))
                {

                    // On créer la session et on redirige sur index.php
                    $_SESSION['user'] = $data['userId'];
                    header('location: ../pages/home.php');
                    die();
                }else{ header("Location: ../pages/home.php?login_err=password_incorect"); die(); }
            }else{ header('Location: ../pages/home.php?login_err=format_email_pas_bon'); die(); }
        }else{ header('Location: ../pages/home.php?login_err=utilisateur_existe_pas'); die(); }
    }else{ header('Location: ../pages/home.php'); die();} // si le formulaire est envoyé sans aucune données