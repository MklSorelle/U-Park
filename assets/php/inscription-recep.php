<?php 
    require '../database/pdo.php'; // On inclut la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password']))
    {
        // Patch XSS
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm-password']);

        $name = strtolower($name); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        $surname = strtolower($surname);
        $email = strtolower($email);

        // On vérifie si l'utilisateur existe
        $check = $pdo->prepare('SELECT userMail, userPwd, userId  FROM user WHERE userMail = :email');
        $check->execute(array(':email' => $email));
        $data = $check->fetch();
        $row = $check->rowCount();

        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($name) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $confirm_password){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                           

                            // On insère dans la base de données
                            $insert = $pdo->prepare("INSERT INTO user (userMail, userPwd, userName, userSurname) VALUES (:email, :password, :name, :surname)");
                            $insert->execute(array(
                                ':email' => $email,
                                ':password' => $password,
                                ':name' => $name,
                                ':surname' => $surname
                            ));
                            
                            // On redirige avec le message de succès
                            header('location: ../pages/home.php');
                            die();
                        }else{ header('Location: index.php?reg_err=mdp_different'); die();}
                    }else{ header('Location: index.php?reg_err=email_pas_de_bonne_forme'); die();}
                }else{ header('Location: index.php?reg_err=email_trop_long'); die();}
            }else{ header('Location: index.php?reg_err=pseudo_trop_long'); die();}
        }else{ header('Location: index.php?reg_err=utilisateur_existe_deja'); die();}
    }