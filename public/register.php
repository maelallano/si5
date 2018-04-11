<?php
require __DIR__ . '/../app/config.php';

require DIR_VIEWS . '/main/header.inc.php';
?>

<p>Formulaire d'inscription à l'experience d'Escape Game d'Aperture Science</p>

<?php
if ($advert = getAdvert()) {
    echo '<p class="'.$advert['type'].'">'.$advert['message'].'</p>';
}

//var_dump($_SESSION);
?>

    <form action="do/register.php" method="post">
        <div class="form-group">
            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" value="<?=$_SESSION['form']['lastName'] ?? ''?>">
        </div>

        <div class="form-group">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName">
        </div>

        <div class="form-group">
            <label for="birthdate">Date de naissance</label>
            <input type="date" name="birthdate" id="birthdate">
        </div>

        <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="sexe">Sexe</label>
            <input type="radio" name="sexe" id="homme"> <label for="homme">Homme</label>
            <input type="radio" name="sexe" id="femme"> <label for="femme">Femme</label>
        </div>

        <div class="form-group">
            <label for="tel">Numéro de tél.</label>
            <input type="tel" name="phone" id="tel">
        </div>

        <div class="form-group">
            <label for="emergency">Personne à contacter en cas de décès</label>
            <input type="text" name="emergency" id="emergency">
        </div>

        <div class="form-group">
            <input type="submit" value="S'inscire">
        </div>
    </form>

<?php
$_SESSION['form'] = [];

require DIR_VIEWS . '/main/footer.inc.php';
?>