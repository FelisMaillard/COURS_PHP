<?php include_once('base_donnee.php'); 

$sql = 'SELECT * FROM 
actualites,tags,auteurs,sources,liens WHERE 
actualites.id_auteur = auteurs.id_auteur AND 
actualites.id_tag = tags.id_tag AND 
actualites.id_nom_source = sources.id_source AND
actualites.id_lien = liens.id_lien';
$temp = $pdo -> prepare($sql);
$temp -> execute();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
        <?php 
        include('header.php');
        //include('nav.php');
        foreach ($temp as $t){
            $date_modification = $t['date_modification'];
            echo 
            "<main>
                <div>
                    <img src='images/".$t['image']."'/>
                    <p onload='calculMiseEnLigne()'>".$t['date_modification']."</p>
                    <a href='article.php?id=".$t['id_actualite']." '>".$t['titre']."</a>
                </div>
            </main>";
        }
        //include('footer.php');
        ?>
	</body>
</html>
