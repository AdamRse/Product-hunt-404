<?php
if (!empty($_POST['nom']) && !empty($_POST['pass']) && !empty($_POST['mail'])){
    require "action/registerBdd.php";
}
else{
    require "action/form_register.php";
}
