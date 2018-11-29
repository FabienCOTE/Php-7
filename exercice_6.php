<?php
if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender'])) {
    if (!is_numeric($_POST['lastName']) || !is_numeric($_POST['firstName']) || !is_numeric($_POST['gender'])) {
        $display = 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . '.';
    } else {
        $display = 'Vous devez indiquer votre civilité, votre nom et votre prénom dans le formulaire';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page.</p>
        </div>
        <?php if (!isset($_POST['lastName']) && !isset($_POST['firstName'])) { ?>
        <div>
            <form method="post" action="">
                <p>
                    <label for="gender">Civilité</label>
                    <select name="gender" id="gender" required>
                        <option value="Mr">Monsieur</option>
                        <option value="Mme">Madame</option>
                    </select>
                    <label for="lastName">Votre nom :</label>
                    <input type="text" name="lastName" id="lastName" />
                    <br />
                    <label for="firstName">Votre prénom :</label>
                    <input type="text" name="firstName" id="firstName" />
                    <input type="submit" name="submit" value="Envoyer" />
                </p>
            </form>
        </div>
        <?php } ?>
        <div>
            <p><?= htmlspecialchars($display); ?></p>
        </div>
    </body>
</html>