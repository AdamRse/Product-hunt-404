<?php


if(USER){
    require "action/compte.php";
}
else{
    "action/compteBdd.php";
}
