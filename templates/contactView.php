<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
include "inc/menuIncView.php";
    ?>
    <title>Document</title>
</head>
<body>
<h1>Formulaire de contact</h1>
    <form action="/submit" method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <label for="newsletter">Souhaitez-vous recevoir notre newsletter ?</label>
        <input type="checkbox" id="newsletter" name="newsletter" value="oui"><br><br>

        <input type="submit" value="Envoyer">
    </form>
<footer><?php
include "inc/footerIncView.php";
       ?></footer>
</body>
</html>