<?php
require __DIR__ . '/../app/config.php';

require DIR_INCLUDES . '/admin/auth.php';

require DIR_VIEWS . '/admin/header.inc.php';

$req = $bdd->prepare('SELECT id,firstName,lastName,birthdate,email,sexe,phone,emergency,submitDate FROM as_register ORDER BY submitDate DESC');
$req->execute();
$registers = $req->fetchAll();

?>

<div class="container backOffice">
    <div class="header">
        <h1><?=SITE_NAME?></h1>
        Connecté en tant que <strong><?=$_SESSION['username']?></strong>, <a href="logout.php?csrf=<?=$_SESSION['csrf']?>">Déconnexion</a>
    </div>

    <h1>Personnes inscrites</h1>

    <div class="subs">
        <?php foreach ($registers as $register) { ?>
            <div class="sub">
                <p>Nom complet : <?=date($register['lastName'], 'Y')?> <?=$register['firstName']?></p>
                <p>Date de naissance : <?=$register['birthdate']?> (<?=date_diff(date_create($register['birthdate']), date_create('today'))->y;?> ans)</p>
                <p>Adresse email : <?=$register['email']?></p>
                <p>Sexe : <?=$register['sexe']?></p>
                <p>Numéro de tél. : <?=$register['phone']?></p>
                <p>Personne à contacter en cas de problème : <?=$register['emergency']?></p>
                <p>Date d'inscription : <?=$register['submitDate']?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require DIR_VIEWS . '/admin/footer.inc.php';
?>