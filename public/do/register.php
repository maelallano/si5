<?php

require_once '../../app/config.php';

$_SESSION['form'] = $_POST;

if (
    empty($_POST['lastName']) ||
    empty($_POST['firstName']) ||
    empty($_POST['birthdate']) ||
    empty($_POST['email']) ||
    empty($_POST['sexe']) ||
    empty($_POST['phone'])
){
    setAdvert('error', 'Veuillez remplir tous les champs');
    redirect('/../register.php');
}

$stmt = $bdd->prepare('SELECT email,phone FROM as_register WHERE email = :email OR phone = :phone');
$stmt->bindValue('email', $_POST['email']);
$stmt->bindValue('phone', $_POST['phone']);
$stmt->execute();
$register = $stmt->fetch();

if ($register) {
    setAdvert('error', 'Une personne s\'est déjà inscrite avec cette adresse email ou ce numéro');
    redirect('/../register.php');
}

$stmt = $bdd->prepare('');
$stmt->execute();

$_SESSION['form'] = [];
setAdvert('success', 'Inscription validée !');
redirect('/../register.php');