<?php
require_once("model/db_model.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        postNewAuteur($nom, $prenom);

        echo "Auteur ajouté avec succès.";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Méthode de requête incorrecte.";
}

require('view/v_NewAuteur.php');
?>