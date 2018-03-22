<?php
/**
 * On va "simuler" l'existence d'un objet Arti (représentation de la table arti) en utilisant des fonctions utiles pour nos contrôleurs
 */

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeArtiAccueil( variable de connexion)
 * Nous renvoie les 5 derniers articles de notre site (idarti, titre, 300 caractères de texte, publie), si pas d'articles renvoie false
 * 2 ) et les categ.titre clicables vers "?c="categ.idcateg pour chaque article, l'article aparaît même si il n'a pas de categ
 */
function listeProjetAccueil($db){
    $sql = "select idProjet, project_title, substr(project_desc, 1, 165) 
AS project_desc, projet_publication_date FROM projet WHERE categorie_idcategorie = 1
order by projet_publication_date DESC
limit 4;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_all($recup, MYSQLI_ASSOC);
    }else{
        return false;
    }
}

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeArtiCateg( variable de connexion, id de la categ)
 * Nous renvoie tous les articles de notre catégorie (idarti, titre, 300 caractères de texte, publie), si pas d'articles renvoie false
 */
function listeArtiCateg($db,$idc){
    $idc = (int) $idc; // mode parano, on veut être certain que $idc ne permet pas une injection sql en le transformant en entier

    $sql = "SELECT p.idProjet, p.project_title, substr(project_desc, 1, 165) AS project_desc, p.projet_publication_date
FROM projet p
where categorie_idcategorie=$idc
Order by projet_publication_date Desc;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_all($recup, MYSQLI_ASSOC);
    }else{
        return false;
    }
}

function listeArtiComplet($db,$idartic){
    $idartic = (int) $idartic;
    $sql = "SELECT p.idProjet, p.project_title, substr(project_desc, 1, 165) AS project_desc, p.projet_publication_date
FROM projet p
where idProjet=$idartic;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_assoc($recup);
    }else{
        return false;
    }
}