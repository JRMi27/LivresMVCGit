<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
		<header>
        <h1>Vive les Livres</h1>
		<header>
		
		<section>    
         <table>
		
        <?php
        while ($donnees = $req->fetch())
        {
        ?>
				<tr>
					<td> <?php echo $donnees['id']; ?> </td>
               		<td> <?php echo $donnees['isbn']; ?> </td>
                	<td> <?php echo $donnees['titre']; ?> </td>
				</tr>
					
        <?php
        }
		
        $req->closeCursor();
        ?>
		</table>
		</section>
    </body>
</html>