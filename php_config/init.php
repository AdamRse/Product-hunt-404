<?php
session_start(); //Initialisation d'une session pour pouvoir utiliser $_SESSION

// Constantes Path

//SCRIPT_FILENAME sans l'index est un root plus fiable
define("P_ROOT", $_SERVER['DOCUMENT_ROOT']);// Création d'une constante ROOT_PROJECT qui contiendra le chemin de la racine du projet. P_ nous indiquera que ce sont des constantes Path (chemin)
define("P_BDD", P_ROOT."/php_config/Bdd.class.php");// Quand on voudra utiliser la Base de données, on aura plus qu'à appeler avec le chemin de P_BDD (par ex : require P_BDD)

require_once P_ROOT."/php_config/fct.php";// Pour utiliser nos fonctions personalisées pour le projet
