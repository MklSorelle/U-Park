<?php
// On récupere les données de l'utilisateur
$req = $pdo->prepare('SELECT userName, userId, userMail, userSurname FROM user WHERE userId = :id');
$req->execute(array(':id' => $_SESSION['user']));
$data = $req->fetchAll(PDO::FETCH_ASSOC);
$userId = $data['userId'];
$name = ucfirst($data['userName']);
$surname = ucfirst($data['userSurname']);
$userMail = $data['userMail'];
?>
