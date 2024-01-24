<?php
//Si l'utilisateur n'est pas connecté, on vois si on peut le connecter par tous les moyens
if(empty($_SESSION["user"])){

    //Si on a un name et pass envoyé à la page pour se connecter
    if(!empty($_POST["nom"]) && !empty($_POST['pass'])){
        $user = $Bdd->connectUser($_POST["nom"], $_POST["pass"]);
        if($user){
            $_SESSION['user']=$user;
            if(empty($_COOKIE["TBD-cn"]))
                setcookie('TBD-cn',$_SERVER['HTTP_USER_AGENT'].'!+'.$user['id'], time()+3600*10);
        }
    }//Sinon on peut essayer se se connecter par le cookie
    elseif(!empty($_COOKIE["TBD-cn"])){
        $csplit = explode("!+", $_COOKIE["TBD-cn"]);
        if(!empty($csplit[1]) && !empty($csplit[0]) && $csplit[0]==$_SERVER['HTTP_USER_AGENT']){
            $user=$Bdd->getUserId($csplit[1]);
            if($user){
                $_SESSION['user'] = $user;
                setcookie('TBD-cn',$_SERVER['HTTP_USER_AGENT'].'!+'.$user['id'], time()+3600*10);
            }
        }
        else // On a un cookie mais il n'a pas les bonne données, il est obsolète ou piraté, on le supprime donc
            setcookie('TBD-cn', '', -1);

    }
}

if(isset($_REQUEST["dc"])){//Déconneion
    unset($_SESSION["user"]);
    setcookie('TBD-cn', '', -1);
}