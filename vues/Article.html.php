<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $article['project_title'] ?></title>
</head>
<body>
<h1><?= $article['project_title'] ?></h1>
<div id="menu">
    <?php
    include "vues/menu.php";
    ?>
</div>
<div id="contenu">
    <h2><?= $article['project_title'] ?></h2>
    <?php

    // on coupe et on transforme en array les résultats de la requête liés aux sections
   // $idcateg=explode(",",$article["idcategorie"]);
   // $titrecateg=explode("|||",$article["titre_categorie"]);

   // foreach($titrecateg AS $key => $values){
  //      echo "<a href='?c={$idcateg[$key]}'>$values</a>  ";
  //  }

    // pas d'articles
    if ($article == false) {
        echo "<h2>Cet article n'existe plus</h2>";
    } else {
            ?>
            <p><?= nl2br($article['project_desc']) ?></p>
            <p><?= $article['projet_publication_date'] ?></p>
            <hr>
            <?php
    }
    ?>
</div>
</body>
</html>
