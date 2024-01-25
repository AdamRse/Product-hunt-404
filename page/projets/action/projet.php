<?php
$projets = $Bdd->getProjets();

foreach ($projets as $projet) {
?>

<div class="flex">
    <!--Informations du projet -->
    <div class="w-1/4 bg-green-500 p-4">
        <h3 class="text-xl font-semibold mb-2 text-white">Projets</h3>
        <form>

            <label for="createur" class="block text-white mb-2">Créateur :</label>
            <input type="text" id="createur" name="createur" class="w-full p-2 mb-4 bg-white rounded" value="<?= isset($projet["createur"]) ? $projet["createur"] : '' ?>">

            <label for="nom" class="block text-white mb-2">Nom du projet :</label>
            <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 bg-white rounded" value="<?= isset($projet["nom"]) ? $projet["nom"] : '' ?>">

            <label for="intro" class="block text-white mb-2">Intro du projet :</label>
            <input type="text" id="intro" name="intro" class="w-full p-2 mb-4 bg-white rounded" value="<?= isset($projet["intro"]) ? $projet["intro"] : '' ?>">
        </form>
    </div>
</div>
<?php
}
?>