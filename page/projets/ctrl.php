<?php
if(empty($_GET['project']))
    require "action/listeProjet.php";
else
    require "action/afficherUnProjet.php";

