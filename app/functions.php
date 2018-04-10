<?php

/**
 * Is the user connected
 *
 * @return bool
 */
function isLogged ()
{
    if (!$_SESSION['auth'] || $_SESSION['role'] != 1) {
        return false;
    } else {
        return true;
    }
}

function genToken ()
{
    return md5(uniqid(rand(), TRUE));
}

/**
 * Set the CSRF token
 *
 * @return string
 */
function setCSRF ()
{
    $token =  genToken();

    $_SESSION['csrf'] = $token;
}

/**
 * Get the advert message (if exist)
 *
 * @return bool
 */
function getAdvert ()
{
    $advert = $_SESSION['advert'] ?? '';

    $_SESSION['advert'] = [];

    return $advert ?? null;
}

/**
 * Set an advert
 *
 * @param string $type
 * @param string $message
 */
function setAdvert (string $type, string $message)
{
    $_SESSION['advert'] = [
        'type' => $type,
        'message' => $message
    ];
}

/**
 * Redirect to a given path
 *
 * @param $path
 */
function redirect ($path)
{
    header('Location: '. WEBROOT . $path);
    exit();
}