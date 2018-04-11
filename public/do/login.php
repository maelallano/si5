<?php

require_once '../../app/config.php';

if (empty($_POST['username']) || empty($_POST['password'])) {
    setAdvert('error', 'Identifiant ou mot de passe incorrects');
    redirect('/../login.php');
}

$stmt = $bdd->prepare('SELECT id,username,password,role FROM as_user WHERE username = :username');
$stmt->bindValue('username', $_POST['username']);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    setAdvert('error', 'Identifiant ou mot de passe incorrects');
    redirect('/../login.php');
}

if(!password_verify($_POST['password'], $user['password'])) {
    setAdvert('error', 'Identifiant ou mot de passe incorrects');
    redirect('/../login.php');
}

if($user['role'] != 1) {
    setAdvert('error', 'Vous ne disposez pas des autorisations nécessaires pour accèder à cette page');
    redirect('/../login.php');
}

$_SESSION = [
    'auth' => true,
    'id' => $user['id'],
    'username' => $user['username'],
    'role' => $user['role'],
    'csrf' => genToken()
];

header('Location: '. WEBROOT .'/../admin.php');