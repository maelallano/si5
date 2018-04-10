<?php

/**
 * Semaine Intensive 5
 * Configuration file
 *
 * @version 1.0.0
 */

// Permet d'activer temporairement les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Paramètres et initialisation de la session
ini_set('session.gc_maxlifetime', '3600');
date_default_timezone_set('Europe/Paris');
session_start();

/*
 * define() permet de définir une constante
 * TOUJOURS en majuscules le nom des constantes
 */
define('SITE_NAME', 'Escape Game - Aperture Science');

define('ROOT', str_replace('/public', '', dirname($_SERVER['SCRIPT_FILENAME'])));
define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']));
define('DIR_BUILD', WEBROOT . '/build');
define('DIR_APP', ROOT . '/app');
define('DIR_VIEWS', ROOT . '/src/views');
define('DIR_INCLUDES', ROOT . '/src/includes');

// On inclus les infos de la BDD
require 'db.php'; // ou include()

// Connexion à la bdd
$dsn = "mysql:host=".$db['host'].";dbname=".$db['dbname'].';charset=utf8;';

$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);

try {
    $bdd = new PDO($dsn, $db['user'], $db['password'], $options);
} catch (PDOException $e) {
    $error = $e->getMessage();
}

// Session init
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true)
{
    $_SESSION['auth'] = false;
}

require_once 'functions.php';

/**
 * Security Shield
 *
 * CSRF token protection
 */
if (empty($_SESSION['csrf']))
{
    setCSRF();
}