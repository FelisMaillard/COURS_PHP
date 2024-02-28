<?php include_once('base_donnee.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM 
    actualites,tags,auteurs,sources,liens WHERE 
    actualites.id_actualite=:id AND
    actualites.id_auteur = auteurs.id_auteur AND 
    actualites.id_tag = tags.id_tag AND 
    actualites.id_nom_source = sources.id_source AND
    actualites.id_lien = liens.id_lien';
    $temp = $pdo -> prepare($sql);
    $temp -> bindParam(':id', $id, PDO::PARAM_INT);
    $temp -> execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include('header.php');
    //include('nav.php');
    foreach ($temp as $t){
        echo 
        "<main>
            <section id='section'> 
                <h2>".$t['titre']."</h2>                
                <h3>".$t['sous_titre']."</h3>
                <aside>
                    <img src='images/".$t['image']."'/>
                    <img src=images/".$t['photo']."/>
                    <p>".$t['nom_auteur']. ' ' .$t['fonction']."</p>
                    <p>Publié le : ".$t['date_publication'].' Dénière modification le : ' .$t['date_modification']."</p>
                </aside>
                <article>
                    <p>".$t['article']."</p>
                    <a href=".$t['lien_source'].">".$t['nom_source']."</a>
                </article>
            </section>
        </main>"; 
    }
    //include('footer.php')
    ?>
</body>
</html>