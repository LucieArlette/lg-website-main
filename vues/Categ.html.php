<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégorie: <?=$detailCateg['titre_categorie']?></title>
</head>
<body>
<h1>Catégorie: <?=$detailCateg['titre_categorie']?></h1>
<p><?=$detailCateg['descr_categorie']?></p>
<div id="menu">
    <?php
    include "vues/menu.php";
    ?>
</div>
<div id="contenu">
    <?php
    // pas d'articles
    if ($projets == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($projets AS $item) {
            ?>
            <h3><a href="?a=<?= $item['idProjet'] ?>"><?= $item['project_title'] ?></a></h3>
            <p><?= $item['project_desc'] ?> ... <a href="?a=<?= $item['idProjet'] ?>">Lire la suite</a></p>
            <p><?= $item['projet_publication_date'] ?></p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
