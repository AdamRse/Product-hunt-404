<?php
if(USER){
    require "action/compte.php";
}
else{
    require "action/compteBdd.php";
}
