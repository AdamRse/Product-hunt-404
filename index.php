<?php
ob_start(); // On stock tout le contenu qui va suivre en mémoire avant de l'envoyer directement
include "./php_config/init.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include "./htmlElements/conf_head.php";// Le contenu HTML de <head>
    ?>
</head>
<body>
    <?php
    include "./htmlElements/header.php";// Le contenu HTML du header (haut de la page html)

    $section = "./page/accueil/ctrl.php"; // La section par défaut va afficher l'accueil
    $js = array("./js/global.js");// On créé un tableau qui va contenir l'adresse de tous les scripts js à executer dans le footer (./htmlElements/footer.php)

    // Si l'utilisateur envoie un requête GET pour visiter une section (avec l'url : index.php?s=<section>)
    if(!empty($_GET['s'])){
        $getSection = "./page/".$_GET['s']."/ctrl.php";// On construit le chemin qui va chercher la section demmandée (sont controleur, qui va contruire le contenu de la page)
        $getJs = './js/'.$_GET['s'].'.js';

        if(file_exists($getSection)){// Si la section demmandée existe bien et renvoie bien un fichier ctrl.php, alors on peut valide le chemin, on affichera bien cette nouvelle section
            $section = $getSection;

            if(file_exists($getJs))// On teste aussi si un fichier js existe pour cette section
                $js[] = $getJs;// Si oui on le passe au tableau js qui l'executera dans le footer (./htmlElements/footer.php)
        }
    }

    include $section;// On execute le code de la section demmandée et vérifiée

    include "./htmlElements/footer.php";// Le contenu HTML du footer (bas de la page html)
    ?>
</body>
</html>
<?php
ob_end_flush();// On envoie tout le HTML de la page qu'on a gardé en mémoire.