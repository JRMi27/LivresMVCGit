<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
		<header>
        <h1>Vive les Collections de Livres</h1>
		<header>
		
		<section>    
        <table>
                <thead>
                    <tr>
                        <th>Collection</th>
                        <th>Titre</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                while ($donnees = $req->fetch()) {
                ?>
                    <tr>
                        <td> <?php echo ($donnees['nomColl']); ?> </td>
                        <td> <?php echo ($donnees['titre']); ?> </td>
                        <td> <?php echo ($donnees['isbn']); ?> </td>
                    </tr>
                <?php
                }
                $req->closeCursor();
                ?>
                </tbody>
            </table>
        </section>
    </body>