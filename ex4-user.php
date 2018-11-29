<?php
if (isset($_POST['lastName']) && isset($_POST['firstName'])) {
    if (!is_numeric($_POST['lastName']) || !is_numeric($_POST['firstName'])) {
        $display = 'Votre nom est "' . $_POST['lastName'] . '" et votre prénom est "' . $_POST['firstName'] . '".';
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans la barre d\'adresse';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4 User</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <p><?= htmlspecialchars($display); ?></p>
    </body>
</html>
