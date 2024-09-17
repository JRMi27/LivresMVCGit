<?php 
require_once "view/header.php";

if (isset($_GET["uc"])){
    $action = $_GET["uc"];
} else {
    $action = "accueil";
}

switch ($action) {
    case "listeLiv":
        include "controler/c_listeLivres.php";
        break;
    case "collLiv":
        include "controler/c_livresColl.php";
        break;
    case "listeAut":
        include "controler/c_listeAuteur.php";
        break;
    case "NewAut":
        include "controler/c_NewAuteur.php";
        break;
} 

?>