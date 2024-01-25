<?php
    if(USER){
    if (!empty($_POST['nom']) && !empty($_POST['intro']) && !empty($_POST['detail']) && isset($_POST['lien']))
        {
            require "action/projetBdd.php";
        }
    else{
        require "action/projet.php";
    }
}
else{
    require "action/nonConnect.php";
}