<?php
require "../php_config/init.php";
include "../php_config/Bdd.class.php";
$user=$Bdd->getUserName("Adam");
var_dump($user);