<?php

require_once '../../app/config.php';

if (
    empty($_POST['username']) ||
    empty($_POST['password']))
{
    setAdvert('error', 'Identifiant ou mot de passe incorrects');
    redirect('/../login.php');
}

$stmt = $bdd->prepare('SELECT id,username,password,role FROM as_register WHERE username = :username');
$stmt->bindValue('username', $_POST['username']);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    setAdvert('error', 'Identifiant ou mot de passe incorrects');
    redirect('/../login.php');
}

header('Location: '. WEBROOT .'/../register.php');