<?php

// Permet d'activer temporairement les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/*
 * define() permet de définir une constante
 * TOUJOURS en majuscules le nom des constantes
 */
define('SITE_NAME', 'Escape Game - Aperture Science');

define('ROOT', str_replace('/public/index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']));
define('DIR_BUILD', WEBROOT . '/build');
define('DIR_APP', ROOT . '/app');
define('DIR_VIEWS', ROOT . '/src/views');
define('DIR_MODELS', ROOT . '/models');

// On inclus les infos de la BDD
require ('db.php'); // ou include()

// Connexion à la bdd
$dsn = "mysql:host=".$db['host'].";dbname=".$db['dbname'].';charset=utf8;';

$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);

try{
    $bdd = new PDO($dsn, $db['user'], $db['password'], $options);
}
// catch any errors
catch (PDOException $e){
    $error = $e->getMessage();
}

// Token temporaire pour le CSRF
$token = 'q?.feGZpZfO5=/';