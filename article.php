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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>