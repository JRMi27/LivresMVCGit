<?php
function getLivres() {
 require_once("sqlConnect.php"); 
 $bdd = getBDD();
 $req = $bdd->query('SELECT * FROM livres');
 return $req;
}
function getLivresColl() {
    require_once("sqlConnect.php");
    $bdd = getBDD();
    $req = $bdd->query('SELECT collections.nomColl, livres.titre, livres.isbn 
    FROM livres 
    INNER JOIN collections ON livres.idColl = collections.id 
    ORDER BY collections.nomColl, livres.titre');
    return $req;
}
function getAuteurs() {
    require_once("sqlConnect.php");
    $bdd = getBDD();
    $req = $bdd->query('SELECT * FROM auteurs');
    return $req;
}
function postNewAuteur($nom, $prenom) {
    require_once("sqlConnect.php");
    $bdd = getBDD();
    
    $req = $bdd->prepare('INSERT INTO auteurs (nomAuteur, prenomAuteur) VALUES (:nom, :prenom)');
    
    $req->execute(array(
        ':nom' => $nom,
        ':prenom' => $prenom
    ));

    return $req;
}

?> 