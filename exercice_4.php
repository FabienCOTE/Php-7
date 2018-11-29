<?php
if (isset($_POST['lastName']) && isset($_POST['firstName'])) {
    if (!is_numeric($_POST['lastName']) && !is_numeric($_POST['firstName'])) {
        $display = 'Votre nom est "' . $_POST['lastName'] . '" et votre prénom est "' . $_POST['firstName'] . '".';
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
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
        </div>
        <div>
            <form method="post" action="ex4-user.php">
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
        <div>
            <p><?= htmlspecialchars($display); ?></p>
        </div>
    </body>
</html>