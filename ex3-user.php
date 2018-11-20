<?php
if (isset($_GET['lastName']) && isset($_GET['firstName'])) {
    if (!is_numeric($_GET['lastName']) || !is_numeric($_GET['firstName'])) {
        $display = 'Votre nom est "' . $_GET['lastName'] . '" et votre prénom est "' . $_GET['firstName'] . '".';
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans la barre d\'adresse';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3 User</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <p><?= htmlspecialchars($display); ?></p>
    </body>
</html>
