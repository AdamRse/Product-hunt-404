<h1>Connexion</h1>
<form action="./" method="post">

    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="pass" placeholder="password">
    <button type="submit">Se connecter</button>
</form>
<?php
if (!empty($_POST['nom']) && !empty($_POST['pass']) && !empty($_POST['mail'])){
    require "action/registerBdd.php";
}
else{
    require "action/form_register.php";
}
