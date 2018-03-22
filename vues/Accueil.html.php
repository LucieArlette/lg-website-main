<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil du site</title>
    <link rel="stylesheet" href="css/masonry.css" />
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/masonry.js"></script>

</head>
<body>
<h1>Accueil</h1>
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
            <!-- ici le foreach pour les categ -->
            <p><?= $item['project_desc'] ?> ... <a href="?a=<?= $item['idProjet'] ?>">Lire la suite</a></p>
            <p><?= $item['projet_publication_date'] ?></p>
            <hr>
            <?php
        }
    }
    ?>
    <h1>Masonry - imagesLoaded progress</h1>

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
        </div>

        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
        </div>

        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
        </div>
    </div>

</div>
</body>
</html>
