<?php
session_start(); //Initialisation d'une session pour pouvoir utiliser $_SESSION

if(isset($_REQUEST["dc"])){//Déconneion
    unset($_SESSION["user"]);
    setcookie('TBD-cn', '', -1);
}
else{
    if(empty($_SESSION["user"])){
        if(!empty($_COOKIE["AdamQuizz"])){
            
        }
    }
}
// Constantes Path

//SCRIPT_FILENAME sans l'index est un root plus fiable
define("P_ROOT", $_SERVER['DOCUMENT_ROOT']);// Création d'une constante ROOT_PROJECT qui contiendra le chemin de la racine du projet. P_ nous indiquera que ce sont des constantes Path (chemin)
define("USER", (empty($_SESSION["user"]) ?false:$_SESSION['user']['id']));

require_once P_ROOT."/php_config/Bdd.class.php";
require_once P_ROOT."/php_config/fct.php";// Pour utiliser nos fonctions personalisées pour le projet


//setcookie('AdamQuizz',$_SERVER['HTTP_USER_AGENT'].'!+'.$pseudoUser, time()+3600*10);