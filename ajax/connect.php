<?php
require "../php_config/init.php";

//On initialise les variables de retour que va renvoyer returnAjax() en fin de script
$retour = "Pramètres nom et mot de passe non reçu";
$code = 2;

//On récupère le pseudo et mot de passe envoyés
if(!empty($_POST["name"]) && !empty($_POST['pass'])){
    $user = $Bdd->connectUser($_POST["name"], $_POST["pass"]);
    if($user){
        $_SESSION['user']=$user;
        if(empty($_COOKIE["TBD-cn"]))
            setcookie('TBD-cn',$_SERVER['HTTP_USER_AGENT'].'!+'.$user['id'], time()+3600*10);
    }
    else{
        $retour = "";
    }
}
returnAjax($retour, $code);