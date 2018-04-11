<?php

if (!isLogged()) {
    redirect('login.php');
}