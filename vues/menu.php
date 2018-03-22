<ul>
    <li><a href="./">Accueil</a></li>
    <?php
    foreach ($pour_menu AS $itemMenu) {
    ?>
        <li><a href="?c=<?=$itemMenu['idcategorie']?>"><?=$itemMenu['titre_categorie']?></a></li>
    <?php
    }
    ?>
</ul>