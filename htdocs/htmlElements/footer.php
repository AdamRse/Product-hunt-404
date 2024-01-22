<footer>

</footer>
<?php
//Ajout dynamique de tous les scripts js de la page
foreach ($js as $fileJs) {// L'existence des fichier du tableau $js a déjà été vérifiée dans index.php
    ?>
    <script src="<?= $fileJs ?>"></script>
    <?php
}