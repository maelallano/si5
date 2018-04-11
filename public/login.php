<?php
$_SESSION['csrf'] = '';
require __DIR__ . '/../app/config.php';

require DIR_VIEWS . '/main/header.inc.php';

if (isLogged()) {
    redirect('admin.php');
}

echo $_SESSION['csrf'];
?>

    <div class="container backOffice login">
        <div class="header">
            <h1><?=SITE_NAME?></h1>
            <p>Veuillez vous connecter pour continuer</p>
        </div>

        <h1>Personnes inscrites</h1>

        <div class="subs">
            <?php
                if ($advert = getAdvert()) {
                    echo '<p class="'.$advert['type'].'">'.$advert['message'].'</p>';
                }
            ?>

            <form  action="<?=WEBROOT?>do/login.php" method="post" class="form-sub">
                <div>

                    <input class="button" type="text" name="username" id="username" placeholder="Identifiant">
                </div>

                <div>

                    <input class="button" type="password" name="password" placeholder="password" id="password">
                </div>

                <div>
                    <input class="button submit" type="submit" value="Connexion">
                </div>
            </form>
        </div>
    </div>

<?php
require DIR_VIEWS . '/main/footer.inc.php';
?>