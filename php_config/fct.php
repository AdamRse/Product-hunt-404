<?php
function returnAjax($retourAjax = true, $code = true){
    return json_encode(array("response" => $retourAjax,"code"=> $code));
}
function connexionUser($user, $mdp){
    global $Bdd;
    $retour = false;
    $user = $Bdd->connectUser($_POST["name"], $_POST["pass"]);
    if($user){
        $_SESSION['user']=$user;
        $retour = true;
        if(empty($_COOKIE["TBD-cn"]))
            setcookie('TBD-cn',$_SERVER['HTTP_USER_AGENT'].'!+'.$user['id'], time()+3600*10);
    }
    return $retour;
}