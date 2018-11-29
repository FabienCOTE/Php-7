<?php
if (isset($_GET['lastName']) && isset($_GET['firstName'])) {
    if (!is_numeric($_GET['lastName']) && !is_numeric($_GET['firstName'])) {
        $display = 'Votre nom est "' . $_GET['lastName'] . '" et votre prénom est "' . $_GET['firstName'] . '".';
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans le formulaire';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
        </div>
        <div>
            <form method="get" action="ex3-user.php">
                <p>
                    <label for="lastName">Votre nom :</label>
                    <input type="text" name="lastName" id="lastName" required />
                    <br />
                    <label for="firstName">Votre prénom :</label>
                    <input type="text" name="firstName" id="firstName" required />
                    <input type="submit" value="Envoyer" />
                </p>
            </form>
        </div>
    </body>
</html>