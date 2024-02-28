<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  include('header.php');
    <?php 
    include('header.php');
    include('nav.php');
    foreach ($temp as $t){
        $date_modification = $t['date_modification'];
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
    include('footer.php')
    ?>
</body>
</html>