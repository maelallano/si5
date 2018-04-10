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

/**
 * CSRF token generator
 *
 * @return string
 */
function genToken ()
{
    return bin2hex(random_bytes(32));
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
 * Verify CSRF hash token
 *
 * @param $csrf
 * @return bool
 */
function verifyCSRF ($csrf)
{
    return hash_equals($_SESSION['csrf'], $csrf);
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