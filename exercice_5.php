<?php
if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender'])) {
    if (!is_numeric($_POST['lastName']) || !is_numeric($_POST['firstName']) || !is_numeric($_POST['gender'])) {
        $display = 'Bonjour ' .$_POST['gender'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . '.';
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans le formulaire';
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
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Créer un formulaire sur la page index.php avec :<br />Une liste déroulante pour la civilité (Mr ou Mme)<br />Un champ texte pour le nom<br />Un champ texte pour le prénom</p>
            <p>Ce formulaire doit rediriger vers la page index.php.</p>
            <p>Vous avez le choix de la méthode.</p>
        </div>
        <div>
            <form method="post" action="">
                <p>
                    <label for="gender">Civilité</label>
                    <select name="gender" id="gender">
                        <option value="Mr">Monsieur</option>
                        <option value="Mme">Madame</option>
                      </select>
                    <label for="lastName">Votre nom :</label>
                    <input type="text" name="lastName" id="lastName" />
                    <br />
                    <label for="firstName">Votre prénom :</label>
                    <input type="text" name="firstName" id="firstName" />
                    <input type="submit" value="Envoyer" />
                </p>
            </form>
        </div>
        <div>
            <p><?= htmlspecialchars($display); ?></p>
        </div>
    </body>
</html>