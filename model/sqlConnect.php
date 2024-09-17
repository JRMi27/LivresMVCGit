<?php
function getBdd() {
  
try
{
    $dsn = 'mysql:host=localhost;dbname=livres;charset=utf8';
    $utilisateur = 'root';
    $motDePasse = '';
    $connexion = new PDO($dsn, $utilisateur, $motDePasse);
    return $connexion;
  echo ($dsn);
    
}
catch ( Exception $e )
{
    echo $dsn . '<br />';
    echo 'Connexion à MySQL impossible : ' . $e->getMessage();
    die();
}
}
?>