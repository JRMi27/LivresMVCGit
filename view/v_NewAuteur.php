<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un nouvel auteur</title>
</head>
<body>
    <h2>Ajouter un nouvel auteur</h2>
    <form action="index.php?action=NewAuteur" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>