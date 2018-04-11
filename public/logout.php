<?php

require_once '../app/config.php';

if (isLogged() && !empty($_GET['csrf']) && verifyCSRF($_GET['csrf'])) {
    session_destroy();

    $_SESSION = [];

    setAdvert('success', 'Aurevoir ! :)');

    header('Location: index.php');
}else{
    header('Location: 404.php');
}